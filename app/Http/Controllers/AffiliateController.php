<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AffiliateService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class AffiliateController{
    public function register(Request $request){

        //Tratando imagem e salvando na pasta public.
        $profilePhotoPath = $request->file('profilePhoto')->store('profile_photos', 'public');
        $documentPath = $request->file('document')->store('documents', 'public');
        $residenceProofPath = $request->file('residenceProof')->store('residence_proofs', 'public');

        try{
            //Primeiramente configurando o cliente como usuário
            $userStore = Http::post(
                //Endpoint da API
                'http://127.0.0.1:8001/api/usuarios/',
                $request->only(
                    'name',
                    'email',
                    'password'
                )
            );

            if($userStore->successful()){
                $user = $userStore->json();
                //Recuperando o id do usuário inserido
                $userId = $user['id'];
            }

            $clientStore = Http::post(
                //Endpoint da API
                'http://127.0.0.1:8001/api/clientes/',
                array_merge(
                    $request->only(
                        'name',
                        'lastname',
                        'gender',
                        'cpf',
                        "address",
                        "number",
                        "neighborhood",
                        "city",
                        "state",
                        "country",
                        "cep",
                        'telephone'
                    ),
                    ['user_id' => $userId],
                    ['photo' => $profilePhotoPath],
                    ['rg' => $documentPath],
                    ['residenceProof' => $residenceProofPath]
                )
            );
            if($clientStore->successful()){
                $client = $clientStore->json();
                return view('dashboard', ['client' => $client]);
            }
        }catch(\Exception $e){
            return response()->json(['details' => $e->getMessage()]);
        }
    }
}

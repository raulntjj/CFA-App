<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UserService{
    protected $url;
    public function __construct(){
        //URL do endpoint
        $this->url = 'http://127.0.0.1:8001/api/usuarios/';
    }

    //Função para buscar todos registros
    public function getAll(){
        try{
            //Buscando resposta na requisição
            $response = Http::get($this->url);

            //Testando se requisição foi bem sucedida
            if($response->successful()){
                //Se sim, retorna a resposta
                return $response->json();
            } else {
                //Se não, retorna erro com status
                throw new \Exception("Error" . $response->status());
            }
        //Um novo tratamento de excessão caso a tentativa acima não fosse possivel iniciar
        } catch (Exception $e) {
            return response()->json(['details' => $e->getMessage()]);
        }
    }

    //Função para buscar um registro por id
    public function getById(int $id){
        try{
            //Buscando resposta na requisição
            $response = Http::get($this->url . $id);

            //Testando se requisição foi bem sucedida
            if($response->successful()){
                //Se sim, retorna a resposta
                return $response->json();
            } else {
                //Se não, retorna erro com status
                throw new \Exception("Error" . $response->status());
            }
        //Um novo tratamento de excessão caso a tentativa acima não fosse possivel iniciar
        } catch (Exception $e) {
            return response()->json(['details' => $e->getMessage()]);
        }
    }

    //Função para adicionar novo registro
    public function add(Request $request){
        try{
            //Enviando requisição
            $response = Http::post($this->url, $request);

            //Testando se requisição foi bem sucedida
            if($response->successful()){
                //Se sim, retorna a resposta
                return $response->json();
            } else {
                //Se não, retorna erro com status
                throw new \Exception("Error" . $response->status());
            }
        //Um novo tratamento de excessão caso a tentativa acima não fosse possivel iniciar
        } catch (Exception $e) {
            return response()->json(['details' => $e->getMessage()]);
        }
    }

    //Função para editar um registro
    public function update(int $id, Request $request){
        try{
            //Enviando requisição
            $response = Http::put($this->url . $id,  $request);

            //Testando se requisição foi bem sucedida
            if($response->successful()){
                //Se sim, retorna a resposta
                return $response->json();
            } else {
                //Se não, retorna erro com status
                throw new \Exception("Error" . $response->status());
            }
        //Um novo tratamento de excessão caso a tentativa acima não fosse possivel iniciar
        } catch (Exception $e) {
            return response()->json(['details' => $e->getMessage()]);
        }
    }

    //Função para deletar um registro
    public function delete(int $id){
        try{
            //Enviando requisição
            $response = Http::delete($this->url . $id);

            //Testando se requisição foi bem sucedida
            if($response->successful()){
                //Se sim, retorna a resposta
                return $response->json();
            } else {
                //Se não, retorna erro com status
                throw new \Exception("Error" . $response->status());
            }
        //Um novo tratamento de excessão caso a tentativa acima não fosse possivel iniciar
        } catch (Exception $e) {
            return response()->json(['details' => $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientWeaponRequest;
use App\Services\ClientWeaponService;

class ClientWeaponController{
    //Instanciando o serviço
    protected $clientWeaponService;
    public function __construct(ClientWeaponService $clientWeaponService){
        $this->clientWeaponService = $clientWeaponService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->clientWeaponService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->clientWeaponService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->clientWeaponService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->clientWeaponService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->clientWeaponService->delete($id);
    }
}

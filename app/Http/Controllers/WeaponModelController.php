<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeaponModelRequest;
use App\Services\WeaponModelService;

class WeaponModelController{
    //Instanciando serviço
    protected $modelService;
    public function __construct(WeaponModelService $modelService){
        $this->modelService = $modelService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->modelService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->modelService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->modelService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->modelService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->modelService->delete($id);
    }
}

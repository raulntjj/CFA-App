<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeaponManufacturerRequest;
use App\Services\WeaponManufacturerService;

class WeaponManufacturerController{
    //Instanciando serviço
    protected $manufacturerService;
    public function __construct(WeaponManufacturerService $manufacturerService){
        $this->manufacturerService = $manufacturerService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->manufacturerService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->manufacturerService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->manufacturerService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->manufacturerService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->manufacturerService->delete($id);
    }
}

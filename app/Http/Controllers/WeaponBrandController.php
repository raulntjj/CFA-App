<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeaponBrandRequest;
use App\Services\WeaponBrandService;

class WeaponBrandController{
    //Instanciando serviço
    protected $brandService;
    public function __construct(WeaponBrandService $brandService){
        $this->brandService = $brandService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->brandService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->brandService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->brandService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->brandService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->brandService->delete($id);
    }
}

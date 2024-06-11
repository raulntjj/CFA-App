<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberTypeRequest;
use App\Services\MemberTypeService;

class MemberTypeController{
    //Instanciando serviço
    protected $typeService;
    public function __construct(MemberTypeService $typeService){
        $this->typeService = $typeService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->typeService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->typeService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->typeService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->typeService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->typeService->delete($id);
    }
}

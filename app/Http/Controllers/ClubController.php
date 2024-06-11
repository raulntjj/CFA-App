<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClubRequest;
use App\Http\Requests\ClubContactRequest;
use App\Http\Requests\AddressRequest;
use App\Services\ClubService;

class ClubController{
    //Instanciando serviço
    protected $clubService;
    public function __construct(ClubService $clubService){
        $this->clubService = $clubService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->clubService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->clubService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->clubService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->clubService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->clubService->delete($id);
    }
}

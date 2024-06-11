<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Services\ClientService;

class ClientController{
    //Instanciando serviço
    protected $clientService;

    public function __construct(ClientService $clientService){
        $this->clientService = $clientService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->clientService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->clientService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->clientService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->clientService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->clientService->delete($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogRequest;
use App\Services\CompetitionLogService;

class CompetitionLogController{
    //Instanciando serviço
    protected $logService;
    public function __construct(CompetitionLogService $logService){
        $this->logService = $logService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->logService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->logService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->logService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->logService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->logService->delete($id);
    }
}

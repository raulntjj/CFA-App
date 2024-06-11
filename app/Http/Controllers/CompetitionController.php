<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetitionRequest;

//Service Provider
use App\Services\CompetitionService;

class CompetitionController{
    //Instanciando serviço
    protected $competitionService;
    public function __construct(CompetitionService $competitionService){
        $this->competitionService = $competitionService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->competitionService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->competitionService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->competitionService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->competitionService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->competitionService->delete($id);
    }
}

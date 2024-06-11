<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchedulePreferenceRequest;
use App\Services\SchedulePreferenceService;

class SchedulePreferenceController{
    //Instanciando serviço
    protected $preferenceService;
    public function __construct(SchedulePreferenceService $preferenceService){
        $this->preferenceService = $preferenceService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->preferenceService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->preferenceService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->preferenceService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->preferenceService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->preferenceService->delete($id);
    }
}

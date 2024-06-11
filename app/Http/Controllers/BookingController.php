<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Services\BookingService;

class BookingController{
    //Instanciando serviço
    protected $bookingService;
    public function __construct(BookingService $bookingService){
        $this->bookingService = $bookingService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->bookingService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->bookingService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->bookingService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->bookingService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->bookingService->delete($id);
    }
}

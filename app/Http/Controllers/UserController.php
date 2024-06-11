<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;

class UserController{
    //Instanciando serviço
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->userService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->userService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->userService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->userService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->userService->delete($id);
    }
}

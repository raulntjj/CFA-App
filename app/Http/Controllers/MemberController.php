<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\MemberRequest;
use App\Services\MemberService;

class MemberController{
    //Instanciando serviço
    protected $memberService;
    public function __construct(MemberService $memberService){
        return $this->memberService = $memberService;
    }

    //Função index, que retornará todos os registros da API
    public function index(){
        return $this->memberService->getAll();
    }

    //Função show, que retornará um registros da API
    public function show(int $id){
        return $this->memberService->getById($id);
    }

    //Função store que criará um registro na API
    public function store(ClientRequest $request){
        return $this->memberService->add($id);
    }

    //Função update que atualizará um registro da API
    public function update(int $id, ClientRequest $request){
        return $this->memberService->update($id);
    }

    //Função destroy que apagará um registro da API
    public function destroy(int $id){
        return $this->memberService->delete($id);
    }
}

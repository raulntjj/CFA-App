@extends('layouts.auth')
@section('title', 'Entrar')
@section('css', 'auth.css')
@section('cssALT', 'signin.css')

@section('content')
    <div class="container-fluid">
        <div class="logo-container">
            <img src="/img/cfa.png" alt="CFA" class="" width="150" height="175">
        </div>

        <div class="card-container">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="E-mail ou telefone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Senha">
                        </div>
                        <a href="#"><p>Esqueceu a senha?</p></a>
                        <button type="submit" class="btn btn-primary btn-block btn-login">Entrar</button>
                    </form>
                    <div class="text-center">
                    <div class="row" style="margin: 5% 0">
                        <hr>
                    </div>
                    <p>Ou filie-se em nosso clube</p>
                    <a href="/cadastrar" class="listStyle"><button class="btn btn-secondary btn-block btn-register">Filie-se</button></a>
                </div>
            </div>
        </div>
@endsection
<!--
<div>
    <div class="row text-center">
        <img src="/img/cfa.png" alt="CFA" class="logo" width="150" height="175">
    </div>
</div>
-->

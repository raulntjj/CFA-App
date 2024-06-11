@extends('layouts.auth')
@section('title', 'Entrar')
@section('css', 'auth.css')
@section('cssALT', 'signin.css')

@section('content')
    <div class="section-container" style="display: grid">
        <div class="row">
            <div class="col-md-5 container-fluid logo-container">
                    <img src="/img/cfa.png" alt="CFA" class="" width="150" height="175">
            </div>

            <div class="col-md-7 container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="/entrar" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control" id="passwordInput" placeholder="Senha" required>
                                <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y" id="togglePassword" style="border: none;">
                                    <ion-icon id="showPass" name="eye-outline"></ion-icon>
                                    <ion-icon id="hidePass" name="eye-off-outline"></ion-icon>
                                </button>
                            </div>

                            <a href="#"><p class="link">Esqueceu a senha?</p></a>
                            <div class="d-grid gap-2">
                                <input class="btn btn-primary" type="submit" value="Entrar">
                            </div>
                        </form>
                        <div class="text-center">
                        <div class="row" style="margin: 5% 0">
                            <hr>
                        </div>
                        <p>Ou filie-se em nosso clube</p>
                        <a href="/cadastrar">
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="button">Filiar</button>
                            </div>
                        </a>
                    </div>
                </div>
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

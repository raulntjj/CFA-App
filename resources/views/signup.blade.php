@extends('layouts.auth')
@section('title', 'Cadastro')
@section('css', 'auth.css')
@section('cssALT', 'signup.css')

@section('content')
<div class="container-fluid">
    <div class="col-sm-12" style="display: flex; justify-content: center">
        <div class="card card-container">
            <div class="card-header card-container-header">
                <h2><strong>Filie-se no Clube de Tiro!</strong></h2>
                <p>Complete seu cadastro para acessar sua conta, reservar sessões de tiro e aproveitar nossos recursos exclusivos.</p>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usuer" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="E-mail ou telefone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-login">Filiar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

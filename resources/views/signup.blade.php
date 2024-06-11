@extends('layouts.auth')
@section('title', 'Cadastro')
@section('css', 'auth.css')
@section('cssALT', 'signup.css')

@section('content')
<style>
    .fade{
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }
</style>
<div class="row section-container">
    <div class="col-md-12 container-fluid">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/cadastrar" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="navPrevious">
                                <a href="#previous"><ion-icon class="btn-nav" name="arrow-back-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <div id="navPrevious2">
                                <a href="#previous2"><ion-icon class="btn-nav" name="arrow-back-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-container-header mb-10">
                        <h2><strong>Filie-se no Clube de Tiro</strong></h2>
                        <p>Complete seu cadastro para acessar sua conta, reservar sessões de tiro e aproveitar nossos recursos exclusivos.</p>
                    </div>

                    <div id="step1">
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <input type="text" class="form-control" id="" name="name" placeholder="Nome">
                            </div>
                            <div class="col-md-7 mb-3">
                                <input type="text" class="form-control" id="" name="lastname" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email">
                                <div class="invalid-feedback">Email inválido.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="emailInput" name="telephone" placeholder="Telefone de contato">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="cpfInput" name="cpf" placeholder="CPF" maxlength="14">
                                    <div class="invalid-feedback">CPF inválido.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="passwordInput" placeholder="Senha" name="password" required>
                                    <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y" id="togglePassword" style="border: none;">
                                        <ion-icon id="showPass" name="eye-outline"></ion-icon>
                                        <ion-icon id="hidePass" name="eye-off-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option value="" selected disabled>Selecione seu gênero</option>
                                    <option value="Male">Masculino</option>
                                    <option value="Female">Feminino</option>
                                    <option value="Gay">Prefiro não informar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" id="btnNext">Próximo</button>
                            </div>
                        </div>
                    </div>

                    <div id="step2" style="display: none">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="" name="address" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <input type="text" class="form-control" id="" name="neighborhood" placeholder="Bairro">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="" name="number" placeholder="Número">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <input type="text" class="form-control" id="" name="city" placeholder="Cidade">
                            </div>
                            <div class="col-md-5 mb-3">
                                <select class="form-select" aria-label="Default select example" name="state">
                                    <option value="" selected disabled>Estado</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <select class="form-select" aria-label="Default select example" name="country">
                                    <option value="" selected disabled>País</option>
                                    <option value="BRA">Brasil</option>
                                </select>

                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="" name="cep" placeholder="CEP" maxlength="8">
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" id="btnNext2">Próximo</button>
                            </div>
                        </div>
                    </div>

                    <div id="step3" style="display: none">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="formFile" class="form-label">Foto de perfil</label>
                                <input class="form-control" type="file" id="formFile" name="profilePhoto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="formFile" class="form-label">Documento</label>
                                <input class="form-control" type="file" id="formFile" name="document">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="formFile" class="form-label">Comprovante de residência</label>
                                <input class="form-control" type="file" id="formFile" name="residenceProof">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 form-group">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Aceito os <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">termos</a> de condições</label>
                            </div>
                        </div>

                        <div class="row mt-10">
                            <div class="d-grid gap-2">
                                <input class="btn btn-success" type="submit" value="Filiar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    //Paginação para página de cadastro
    $(document).ready(function() {
            $("#navPrevious").hide();
            $("#navPrevious2").hide();

            // Efeito de fade para pular para a segunda página de cadastro
            $("#btnNext").on('click', function() {
                $("#step1, #navNext").fadeOut(500, function() {
                    $("#step2").fadeIn(500);
                    $("#navPrevious").show();
                });
            });

            // Efeito de fade para pular para a primeira página de cadastro
            $("#btnPrevious, a[href='#previous']").click(function() {
                $("#step2, #navPrevious").fadeOut(500, function() {
                    $("#step1").fadeIn(500);
                    $("#navPrevious").hide();
                });
            });

            // Efeito de fade para pular para a terceira página de cadastro
            $("#btnNext2").on('click', function() {
                $("#step2, #navNext2").fadeOut(500, function() {
                    $("#step3").fadeIn(500);
                    $("#navPrevious2").show();
                    $("#navPrevious").hide();
                });
            });

            // Efeito de fade para pular para a segunda página de cadastro
            $("#btnPrevious2, a[href='#previous2']").click(function() {
                $("#step3, #navPrevious2").fadeOut(500, function() {
                    $("#step2").fadeIn(500);
                    $("#navNext2").show();
                    $("#navPrevious").show();
                });
            });
        });

    //Função para inserir as pontuações no cpf. (Uma forma eficiente de padronizar os dados no banco de dados)
    document.getElementById('cpfInput').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 11) value = value.slice(0, 11);

        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

        e.target.value = value;

        if (value.length === 14) {
            if (validateCPF(value)) {
                e.target.classList.remove('is-invalid');
                e.target.classList.add('is-valid');
            } else {
                e.target.classList.remove('is-valid');
                e.target.classList.add('is-invalid');
            }
        } else {
            e.target.classList.remove('is-valid', 'is-invalid');
        }
    });

    //Função com lógica para validação de CPF
    function validateCPF(cpf) {
        cpf = cpf.replace(/\D/g, '');

        if (cpf.length !== 11 ||
            /^(\d)\1{10}$/.test(cpf)) {
            return false;
        }

        let sum = 0;
        for (let i = 0; i < 9; i++) {
            sum += parseInt(cpf.charAt(i)) * (10 - i);
        }

        let remainder = 11 - (sum % 11);
        if (remainder === 10 || remainder === 11) {
            remainder = 0;
        }

        if (remainder !== parseInt(cpf.charAt(9))) {
            return false;
        }

        sum = 0;
        for (let i = 0; i < 10; i++) {
            sum += parseInt(cpf.charAt(i)) * (11 - i);
        }

        remainder = 11 - (sum % 11);
        if (remainder === 10 || remainder === 11) {
            remainder = 0;
        }

        if (remainder !== parseInt(cpf.charAt(10))) {
            return false;
        }

        return true;
    }

    //Validação de email
    document.getElementById('emailInput').addEventListener('input', function (e) {
            const email = e.target.value;

            if (validateEmail(email)) {
                e.target.classList.remove('is-invalid');
                e.target.classList.add('is-valid');
            } else {
                e.target.classList.remove('is-valid');
                e.target.classList.add('is-invalid');
            }
        });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
</script>
@endsection

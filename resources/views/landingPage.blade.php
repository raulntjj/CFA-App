<!DOCTYPE html>
<html lang="en">
<head>
    <title>CFA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- Fontes --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- Css --}}
    <link rel="stylesheet" href="/assets/css/landingPage.css">
</head>
<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                    </button>
                    <a class="navbar-brand default logo" href="#landingPage">CFA</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#courses">Cursos</a></li>
                        <li><a href="#plans">Planos</a></li>
                        <li><a href="#about">Sobre nós</a></li>
                        <li><a href="/entrar">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{-- Hero Section --}}
        <section class="herosection" id="index">
            <div class="col-sm-12">
                <h1 class="title" style="color: #303030">Clube de Formação de Atiradores</h1>
                <h4 class="subtitle-hs" style="color: #616161">Descubra a precisão.<br>Sinta a emoção.<br>Junte-se à elite do tiro!</h4>
                <p>Aprimore suas habilidades de tiro e faça parte de nossa comunidade apaixonada. Seja você um novato ou um especialista, oferecemos treinamento de classe mundial e eventos emocionantes. Junte-se a nós agora para uma experiência única!</p>
                <a href="/cadastrar"><button class="btn btn-lg end-0">Filie-se agora</button></a>
                <a href="#services"><p>Ou saiba mais sobre nosso clube &rarr;</p></a>
            </div>
        </section>

        {{-- Services Section --}}
        <section id="services" class="container-fluid" style="background-color: rgb(226 232 240)">
            <h2 class="subtitle">Serviços</h2>
            <h4>Serviços que nós oferecemos em nosso clube</h4>
            <div class="row">
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-fire logo-small"></span>
                    <h4>Aluguel de Armas</h4>
                    <p>Disponibilidade de diversas armas para aluguel durante a prática.</p>
                </div>
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-screenshot logo-small"></span>
                    <h4>Estandes de tiro</h4>
                    <p>Estandes de tiros de alta qualidade para proprocionar a melhor experiência para você</p>
                </div>
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-duplicate logo-small"></span>
                    <h4>Despachante</h4>
                    <p>Prestamos serviços de despachante para documentação</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-stats logo-small"></span>
                    <h4>Eventos e Competições</h4>
                    <p>Organização de torneios e competições de tiro.</p>
                </div>
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-check logo-small"></span>
                    <h4>Certificações</h4>
                    <p>Treinamento para porte e posse de armas de fogo.</p>
                </div>
                <div class="col-sm-4 slideanim" style="margin-top: 50px">
                    <span class="glyphicon glyphicon-eye-open logo-small"></span>
                    <h4>Treinamento Personalizado</h4>
                    <p>Sessões de treinamento individualizado.</p>
                </div>
            </div>
        </section>

        {{-- Courses Section --}}
        <section id="courses" class="container-fluid" style="background-color: rgb(241 245 249)">
            <h2 class="subtitle">Cursos</h2>
            <h4>Cursos que oferecemos em nosso clube</h4>
            <div class="col-sm-4 slideanim">
                <div class="thumbnail">
                    <img src="/img/iniciante.jpg" alt="Iniciação ao Tiro" width="400" height="300">
                    <div style="padding: 10px; text-align: justify">
                        <p><strong>Iniciação ao Tiro</strong></p>
                        <p>Projetado para iniciantes, este curso cobre os fundamentos básicos de segurança, manuseio de armas de fogo e técnicas de tiro.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 slideanim">
                <div class="thumbnail">
                    <img src="/img/defensivo.jpg" alt="Tiro Defensivo" width="400" height="300">
                    <div style="padding: 10px; text-align: justify">
                        <p><strong>Tiro Defensivo</strong></p>
                        <p>Voltado para aqueles interessados em autodefesa, este curso ensina técnicas de tiro defensivo, posicionamento tático e engajamento de alvos em cenários realistas.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 slideanim">
                <div class="thumbnail">
                    <img src="/img/esportivo.jpg" alt="Tiro Esportivo" width="400" height="300">
                    <div style="padding: 10px; text-align: justify">
                        <p><strong>Tiro Esportivo</strong></p>
                        <p>Destinado a entusiastas do esporte, este curso abrange técnicas avançadas de tiro, pontaria precisa e prática de competição em várias disciplinas de tiro esportivo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id=feedback class="container-fluid " style="background-color: rgb(226 232 240)">
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" data-touch="true" data-bs-touch="true">
                <h2 class="subtitle">Feedback de nossos clientes</h2>
                {{-- Indicadores --}}
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                {{-- Sliders --}}
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    <h4>"O melhor clube de tiro da região!"<br></h4><span>João da Silva, Membro Aspirante</span>
                    </div>
                    <div class="item">
                    <h4>"Desde que entrei no clube, melhorei muito minha capacidade de auto defesa, recomento muito."</h4><span>Matheus Matos, Membro Fuzileiro</span>
                    </div>
                    <div class="item">
                    <h4>"Amo este clube, muito organizado e estruturado, parabéns para a direção!"</h4><span>Raul de Oliviera, Membro Veterano</span>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section id="plans" class="container-fluid" style="background-color: rgb(241 245 249)">
            <div>
                <h2 class="subtitle">Planos de filiação</h2>
                <h4>Escolha o plano de filiação que melhor se adapta a você.</h4>
            </div>
            <div class="row panel-fluid text-center">
                <div class="col-sm-4 col-xs-12 slideanim">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Aspirante</h1>
                            </div>
                            <div class="panel-body">
                                <p>Isenção do aluguel do estande e do armamento</p>
                                <p>Óculos e abafadores gratuitos para uso no estande</p>
                                <p>Desconto de 5% na nossa loja</p>
                                <p>Treinos de IPSC/IDPA livre</p>
                                <p>Participação em eventos especiais</p>
                            </div>
                            <div class="panel-footer">
                            <h3>R$59,90</h3>
                            <h4>Mensais</h4>
                            <button class="btn btn-lg">Filie-se</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 slideanim">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                        <h1>Fuzileiro</h1>
                        </div>
                        <div class="panel-body">
                            <p>Isenção do aluguel do estande e do armamento</p>
                            <p>Óculos e abafadores gratuitos para uso no estande</p>
                            <p>Desconto de 7% na nossa loja</p>
                            <p>Treinos de IPSC/IDPA livre</p>
                            <p>Desconto de 15% nos cursos</p>
                            <p>Participação em eventos especiais</p>
                            <p>Descontos de 10% em serviços de despachante.</p>
                            <p>Utilização de máquina de recarga.</p>
                        </div>
                        <div class="panel-footer">
                        <h3>R$89,90</h3>
                        <h4>Mensais</h4>
                        <button class="btn btn-lg">Filie-se</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 slideanim">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                        <h1>Veterano</h1>
                        </div>
                        <div class="panel-body">
                            <p>Isenção do aluguel do estande e do armamento</p>
                            <p>Óculos e abafadores gratuitos para uso no estande</p>
                            <p>Desconto de 8% na nossa loja</p>
                            <p>Treinos de IPSC/IDPA livre</p>
                            <p>Desconto de 20% nos cursos</p>
                            <p>Participação em eventos especiais</p>
                            <p>1 dependente de 1º grau e demais dependentes por apenas R$ 79,90</p>
                            <p>Descontos de 20% em serviços de despachante.</p>
                            <p>Prioridade na utilização do estande</p>
                            <p>Utilização de máquina de recarga.</p>
                        </div>
                        <div class="panel-footer">
                        <h3>R$109,90</h3>
                        <h4>Mensais</h4>
                        <button class="btn btn-lg">Filie-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid" id='about' style="background-color: rgb(226 232 240)">
            <div class="row">
                <h2 class="subtitle col-sm-12 slideanim">Conheça mais sobre nossa trajetória!</h2>
            </div>
            <div class="row">
                <div class="col-sm-7 slideanim">
                    <h4><strong>Onde nos situamos?</strong></h4>
                    <p style="text-align: justify">
                        Localizado na deslumbrante Fazenda Barreira, às margens da BR-116 no KM-503, estamos comprometidos em oferecer a mais alta qualidade de treinamento em tiro esportivo.
                        No CFA, temos o orgulho de contar com uma equipe de instrutores altamente capacitados, cada um deles trazendo anos de experiência e conhecimento para o campo. Nossos instrutores são credenciados e apaixonados por compartilhar suas habilidades com nossos alunos, garantindo um ambiente de aprendizado seguro, profissional e envolvente.
                        Aqui no CFA, valorizamos a segurança acima de tudo.
                    </p>

                    <h4><strong>Nossos valores.</strong></h4>
                    <p style="text-align: justify">
                        Nosso compromisso com práticas de segurança rigorosas é evidente em tudo o que fazemos, desde a instrução básica até o treinamento avançado. Nossa prioridade é garantir que cada aluno se sinta confortável, confiante e seguro ao manusear armas de fogo.
                        Além de nossa ênfase na segurança, no CFA, também nos esforçamos para promover a paixão pelo tiro esportivo.
                    </p>
                </div>

                <div class="col-sm-5 slideanim">
                    <h4><strong>Filie-se e faça parte do nosso clube!</strong></h4>
                    <p style="text-align: justify">
                        Acreditamos que o tiro esportivo é uma atividade emocionante e gratificante que pode ser apreciada por pessoas de todas as idades e habilidades. Nossos programas abrangentes são projetados para atender às necessidades de iniciantes e atiradores experientes, oferecendo uma variedade de cursos e atividades para todos os níveis de habilidade.
                        Quer você esteja interessado em competir em níveis profissionais ou simplesmente deseje aprimorar suas habilidades por diversão, o CFA está aqui para ajudá-lo a alcançar seus objetivos. Junte-se a nós e descubra a emoção do tiro esportivo no Centro de Formação de Atiradores Tiro Esportivo.
                        Entre em contato conosco hoje mesmo para saber mais sobre nossos cursos, horários e disponibilidade. Estamos ansiosos para recebê-lo no CFA!
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section id="contact" class="row footer-fluid">
            <div class="row" style="margin-bottom: 2%">
                <div class="col-sm-12">
                    <h2 class="subtitle text-center" style="color: white">Entre em contato conosco</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-12" style="display: flex; justify-content: center; align-items: center">
                            <img src="/img/cfa.png" alt="Iniciação ao Tiro" width="150" height="175">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 7%">
                        <h4 style="color: white; display: flex; justify-content: center;">Nossas informações de contato</h4>
                        <div class="col-sm-12 contacts">
                            <p style="color: white">Inhapim - Minas Gerais, Brasil</p>
                            <p style="color: white">+55 (31) 99912-3456</p>
                            <p style="color: white">cfa@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="display: flex; justify-content: center; align-items: center">
                    <div class="divisor"></div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-5 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                        </div>
                        <div class="col-sm-7 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comentário" rows="5"></textarea><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="form-control btn btn-default" type="submit">Enviar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div style="margin-top: 2%">
                            <h4 class="text-center" style="color: white">Fique atento nas nossas redes sociais</h4>
                            <div class="glyphicon" style="display: flex; justify-content: space-around; margin-top: 2%">
                                <a href="https://facebook.com" target="_blank"><p style="color: white"><ion-icon name="logo-facebook"></ion-icon></p></a>
                                <a href="https://instagram.com" target="_blank"><p style="color: white"><ion-icon name="logo-instagram"></ion-icon></p></a>
                                <a href="https://twitter.com" target="_blank"><p style="color: white"><ion-icon name="logo-twitter"></ion-icon></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row text-center" style="background-color: #0c446c">
            <p style="color: white; margin-top: 20px">Clube de formação de Atiradores de inhapim.<br>Todos direitos reservados.</p>
            <a href="#landingPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </section>
    </footer>

    <script>
        $(document).ready(function(){
        //Animação para atalho de scroll na navegação
        $(".navbar a, footer a[href='#landingPage'], .herosection a").on('click', function(event) {
            if (this.hash !== "") {
            event.preventDefault();
            //Salavando hash
            var hash = this.hash;

            //Utilizando Jquery para fazer a animação. 900 é o tempo em milisegundos da animação
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                //Adicionando hash (#) no menu
                window.location.hash = hash;
            });
            }
        });

        //Script para adicionar efeito de "desvendamento" ao scrolar a página
        $(window).scroll(function() {
            $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                //Adiciona a classe slide criada no arquivo CSS
                $(this).addClass("slide");
                }
            });
        });
        })
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

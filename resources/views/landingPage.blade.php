@extends('layouts.main')
@section('title', 'CFA')

@section('content')
    {{-- Index Section --}}
    <section class="container-fluid" id="index" style="background-color: rgb(241 245 249)">
        <div class="col-sm-12">
            <h1 class="title">Clube de Formação de Atiradores</h1>
            <h4 class="subtitle-v1">Descubra a Precisão.<br>Sinta a Emoção.<br>Junte-se à Elite do Tiro!</h4>
            <p>Aprimore suas habilidades de tiro e faça parte de nossa comunidade apaixonada. Seja você um novato ou um especialista, oferecemos treinamento de classe mundial e eventos emocionantes. Junte-se a nós agora para uma experiência única!</p>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="container-fluid" style="background-color: rgb(226 232 240)">
        <h2 class="subtitle">Serviços</h2>
        <h4>Serviços que nós oferecemos em nosso clube</h4>
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

    <section id="feedback" class="container-fluid carousel slide text-center slideanim" data-ride="carousel" style="background-color: rgb(226 232 240)">
        <h2 class="subtitle">Feedback de nossos clientes</h2>
        <ol class="carousel-indicators">
            <li data-target="#feedback" data-slide-to="0" class="active"></li>
            <li data-target="#feedback" data-slide-to="1"></li>
            <li data-target="#feedback" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"O melhor clube de tiro da região!"<br><span>João da Silva, Membro Aspirante</span></h4>
            </div>
            <div class="item">
                <h4>"Desde que entrei no clube, melhorei muito minha capacidade de auto defesa, recomento muito."<br><span>Matheus Matos, Membro Fuzileiro</span></h4>
            </div>
            <div class="item">
                <h4>"Amo este clube, muito organizado e estruturado, parabéns para a direção!"<br><span>Raul de Oliviera, Membro Veterano</span></h4>
            </div>
        </div>

        <a class="left carousel-control" href="#feedback" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#feedback" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </section>

    <section id="plans" class="container-fluid" style="background-color: rgb(226 232 240)">
        <div class="text-center">
            <h2 class="subtitle">Planos de filiação</h2>
            <h4>Escolha o plano de filiação que melhor se adapta a você.</h4>
        </div>
        <div class="row">
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

    <section class="container-fluid" id='about' style="background-color: rgb(241 245 249)">
        <div class="col-sm-8 slideanim">
            <h2 class="subtitle">Conheça melhor nossa trajetória!</h2>
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

            <h4><strong>Filie-se e faça parte do nosso clube!</strong></h4>
            <p style="text-align: justify">
                Acreditamos que o tiro esportivo é uma atividade emocionante e gratificante que pode ser apreciada por pessoas de todas as idades e habilidades. Nossos programas abrangentes são projetados para atender às necessidades de iniciantes e atiradores experientes, oferecendo uma variedade de cursos e atividades para todos os níveis de habilidade.
                Quer você esteja interessado em competir em níveis profissionais ou simplesmente deseje aprimorar suas habilidades por diversão, o CFA está aqui para ajudá-lo a alcançar seus objetivos. Junte-se a nós e descubra a emoção do tiro esportivo no Centro de Formação de Atiradores Tiro Esportivo.
                Entre em contato conosco hoje mesmo para saber mais sobre nossos cursos, horários e disponibilidade. Estamos ansiosos para recebê-lo no CFA!
            </p>
        </div>
    </section>
@endsection

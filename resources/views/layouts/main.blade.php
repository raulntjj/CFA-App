<!--
    Verde Militar (#4B5320)
    Marrom (#8B4513)
    Cinza Escuro (#2F4F4F)
    Preto (#000000)
    Branco (#FFFFFF)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <section id="contact" class="row container-fluid" style="background-color: #156ca4; padding: 5% 5% !important;">
            <h2 class="subtitle text-center" style="color: white">Entre em contato conosco</h2>
            <div class="col-sm-5">
                <p class="text-center" style="color: white">Após contato, retornaremos o mais breve possível</p>
                <p style="color: white"><span class="glyphicon glyphicon-map-marker"></span> Inhapim - Minas Gerais, Brasil</p>
                <p style="color: white"><span class="glyphicon glyphicon-phone"></span> +55 (31) 99912-3456</p>
                <p style="color: white"><span class="glyphicon glyphicon-envelope"></span> cfa@gmail.com</p>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Enviar</button>
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
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                $(this).addClass("slide");
                }
            });
        });
        })
    </script>
</body>
</html>

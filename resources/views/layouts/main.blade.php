<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/c26b9223c8.js" crossorigin="anonymous"></script>
    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="icon" href="img/CDP-LOGO.png" />
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="/">
                <h4>Clube da Programacao</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#time">Membros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid container-trabalho">
        @yield('content')
    </div>


    <!--- Footer -->
    <section class="section-page" id="contato">
        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">
            <!-- Footer Elements -->
            <div class="container">
                <!-- Social buttons -->
                <div class="row">
                    <div class="col-md-4 col-12">
                        <p class="text-footer"><i class="fas fa-envelope-open-text"></i>
                            cprogramacaouespi@gmail.com<br>
                            <i class="fab fa-instagram"></i> <a class="footer-link"
                                href="https://www.instagram.com/clubedaprogramacao/"
                                target="_blanck">clubedaprogramacao</a><br>
                            UESPI - Campus Pirajá, Teresina, LABRAS
                        </p>
                    </div>
                    <div class="col-md-8 col-12 text-right">
                        <p class="text-footer">&ldquo;<i>A arte de programar consiste em organizar e dominar a
                                complexidade.</i>&rdquo; <br><cite>Edsger W. Dijkstra</cite>
                        </p>
                    </div>
                </div>
                <!-- Social buttons -->
            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://dreamroot.herokuapp.com/" target="_blanck"> DreamRoot</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    @stack('scripts-filtro')

    <!-- Custom scripts for this template -->
    <script src="/js/script.js"></script>
    <script src="/js/jquery.easing.min.js"></script>

</body>

</html>

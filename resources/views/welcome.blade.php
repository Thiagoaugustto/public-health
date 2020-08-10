<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <title>Public Health</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/welcome.css" rel="stylesheet" media="all" type="text/css">
        <link href="/css/sidebar-vertical.css" rel="stylesheet">
        <link href="/css/estilo-painel-controler.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    </head>
    <body>
        <div class="wrapper">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right-enter links-top">
                        <a href="{{ url('/login') }}">Entrar</a>
                    </div>    
                    <div class="top-right-register links-top">
                        <a href="{{ url('/register') }}">Registrar</a>
                    </div>
                @endif
                    <div class="dropdown top-right-register links-top menu-mobile" style="display: none;">
                        <a href="#sidebar-wrapper" class="toggle-menu scroll-effect" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="menu-mobile">Menu</a>
                    </div>
                    <div class="menu-vertical">
                    @include ('admin-partials.menu-mobile-usuario')
                    </div>
                <div class="content">
                    <div class="title">
                        SISTEMA DE SAÚDE PÚBLICA
                    </div>

                    <div class="links">
                        <a href="#">Especialidades</a>
                        <a href="#">Consultas</a>
                        <a href="#">Exames</a>
                        <a href="#">Contato</a>
                        <a href="#">Sobre o Sistema</a>
                    </div>
                </div>
            </div>
        </div>
    <script src="/js/app.js"></script>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sidebar-vertical.css" rel="stylesheet">
    <link href="/css/estilo-painel-controler.css" rel="stylesheet">
    <link href="/css/admin-form-acesso-sistema.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body-login">
    <div class="wrapper">
        <header class="meu-header">
            <nav class="navbar navbar-default navbar-fixed-top" id="menu-login-full">
                <div class="inutil">

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                           
                            @if (Auth::guest())
                                <li class="top-right-enter links-top">
                                    <a href="{{ url('/login') }}">Entrar</a>
                                </li>
                                <li class="top-right-register links-top">
                                    <a href="{{ url('/register') }}">Registrar</a>
                                </li>
                                <li class="dropdown top-right-register menu-mobile" style="display: none;">
                                    <a href="#sidebar-wrapper" class="toggle-menu scroll-effect" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="menu-mobile">Menu</a>
                                </li>
                            @else
                            
                                <li class="dropdown top-right-user links-user-top drop">
                                    <a href="#"  name="dropdown" class="dropdown-toggle drop-config" data-toggle="dropdown" role="button" aria-expanded="false">
                                       {{ Auth::user()->tipo}}<span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu drop-config" role="menu">
                                        <li class="links-top">
                                            <a class="logout" name="logout" type="button" href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Sair
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown top-right-menu links-top">
                                    <a href="#sidebar-wrapper" class="toggle-menu scroll-effect" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebar-wrapper" name="menu">Menu</a>
                                </li>
                                <li class="top-right-home links-top">
                                    <a href="{{ URL::previous() }}" name="previous" type="button"><i class="fa fa-arrow-left"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <div class="menu-vertical">
        @yield('sidebar-vertical')
        @include ('admin-partials.menu-mobile-usuario')
    </div>
        @yield('content')
 
</div>
    <!-- Scripts -->
 <script src="/js/app.js"></script>
</body>
</html>

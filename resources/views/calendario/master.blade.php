<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="/css/app.css" rel="stylesheet">
<link href="{{asset('assets/fullcalendar/lib/main.css')}}" rel='stylesheet' />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"  >
<link href="{{asset('assets/fullcalendar/css/style.css')}}" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="/css/estilo-painel-controler.css" rel="stylesheet">
<link href="/css/sidebar-vertical.css" rel="stylesheet">

</head>
<body id="body-login">
  @include('calendario.modal-calendar')
  <div id='wrap'  class="wrapper">
    <header class="meu-header">
      <nav class="navbar navbar-default navbar-fixed-top" id="menu-login-full">
        <div class="inutil">
          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown top-right-user links-user-top drop">
                <a href="#"  name="dropdown" class="dropdown-toggle drop-config" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->tipo}}
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
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="menu-vertical">
        @include ('calendario.sidebar-vertical-usuario')
    </div>
    <div id='external-events' style="display: none;">
      <div id='external-events-list'>
      </div>
    </div>
    <div class="container" style="padding-top:0;">
    <div class="row">
      <div class="col-md-12 col-md-offset-1">
      </div>
    </div>
    <div id='calendar-wrap'>
      <div id='calendar' 
        data-route-load-events="{{ route('routeLoadEvents') }}"
        data-route-event-update="{{ route('routeEventUpdate') }}"
        data-route-event-store="{{ route('routeEventStore') }}"
        data-route-event-delete="{{ route('routeEventDelete') }}"> 
      </div>
    </div>
  </div>

<script src="{{asset('assets/fullcalendar/lib/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="{{asset('assets/fullcalendar/js/script.js')}}"></script>
<script src="{{asset('assets/fullcalendar/js/calendar.js')}}"></script>
<script src="{{asset('assets/fullcalendar/lib/locales-all.js')}}"></script>

</body>
</html>

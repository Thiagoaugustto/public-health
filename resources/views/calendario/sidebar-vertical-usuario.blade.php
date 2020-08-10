 <div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper" class="mobile-nav collapse">
    <ul class="sidebar-nav">
      <!--  area destina ao nome do usuario,foto e status -->
      <div class="painel-do-usuario">
        <div class="pull-center image" >
          <img src="/imagens/avatar/{{Auth::user()->avatar}}" class="img-circle" alt="Imagem do usuário" >
        </div>
        <div class="informacao-center">
          @if (Auth::guest())
            <p>admin@admin.com</p>
          @else           
            <p>{{$nomeReduzido= str_limit(Auth::user()->name, 20) }}</p>
          @endif
        </div>
        </div>
        <!-- fim da area  -->
              <li class="sidebar-brand">
                <a href="{{ url('/home') }}"><span class=" fa fa-dashboard" aria-hidden="true"></span>
                  <span>Home</span>
                </a>
              </li>
              <li>
                <a href="{{route('perfil.index')}}"><span class=" fa fa-user" aria-hidden="true"></span>
                  <span>Perfil</span>
                </a>
              </li>
              <li>
                <a href="{{route('exame.index')}}"><span class=" fa fa-medkit" aria-hidden="true"></span>
                  <span>Exames e Procedimentos</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/calendario') }}"><span class=" fa fa-medkit" aria-hidden="true"></span>
                  <span>Agendamentos</span>
                </a>
              </li>        
            </ul>
          </div>
          <!--  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">mostrar</a> -->
           
<script>
/* $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});*/
</script>
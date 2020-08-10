@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
           <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>Área do paciente</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <div class="row" style="
                        display: -webkit-inline-box;
                        display: block;">
                        <div class="col-sm-3" id="cartao">
                            <div class="card">
                                <canvas class="header-bg" width="250" height="70" id="header-blur" style=" background-image: url('/imagens/misc/blur-01.jpg');"></canvas>
                                <div class="avatar">
                                    <img src="/imagens/misc/unnamed.jpg">
                                </div>
                                <div class="content">
                                    <p>Exames e Procedimentos</p>
                                    <span>Consulte nossos exames disponiveis</span>
                                    <p><a href="{{ url('/exame') }}" role="button" class="btn btn-default btn-card">Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" id="cartao">
                            <div class="card">
                                <canvas class="header-bg" width="250" height="70" id="header-blur" style=" background-image: url('/imagens/misc/blur-01.jpg');"></canvas>
                                <div class="avatar">
                                    <img src="/imagens/misc/atendimento.jpg">
                                </div>
                                <div class="content">
                                    <p>Agendamentos</p>
                                    <span>Consulte nossa agenda e solicite uma consulta ou exame</span>
                                    <p><a href="{{ url('/calendario') }}" role="button" class="btn btn-default btn-card">Acessar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

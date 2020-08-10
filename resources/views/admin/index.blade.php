@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
           <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>Área do administrador</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <div class="row" style="
                        display: -webkit-inline-box;
                        display: block;">
                        <div class="col-sm-3" id="cartao">
                            <div class="card">
                                <canvas class="header-bg" width="250" height="70" id="header-blur" style=" background-image: url('/imagens/misc/calendar.jpg');"></canvas>
                                <div class="avatar">
                                    <img src="/imagens/misc/checklist.jpg">
                                </div>
                                <div class="content">
                                    <p>Consultar usuários</p>
                                    <span>Consulte a lista de usuários do sistema</span>
                                    <p><a href="{{ url('/admin/consulta/usuarios') }}" role="button" class="btn btn-default btn-card">Acessar</a></p>
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



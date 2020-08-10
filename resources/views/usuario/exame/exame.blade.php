@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>Exames e Procedimentos</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <div class="row" style="
                        display: -webkit-inline-box;
                        display: block;">
                        @foreach($exames as $exames)
                        <div class="form-group-col-md-12">
                            <div class="col-sm-3" id="cartao">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="70" id="header-blur" 
                                        style="background-image: url(/imagens/misc/{{$exames->avatar_fundo}});
                                        background-size: cover;"></canvas>
                                    <div class="avatar">
                                        <img src="/imagens/misc/{{$exames->avatar}}">   
                                    </div>
                                    <div class="content">
                                        <p>{{$exames->nome_exame}}</p>
                                        <p><a  href ="{{ route('exame', $exames->id)}}" role="button" class="btn btn-default btn-card" nome="access">Detalhes</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

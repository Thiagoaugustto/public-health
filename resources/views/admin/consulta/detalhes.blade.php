@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>Detalhes do usuário</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <div class="exame-info" style="position: absolute;">
                        <img src="/imagens/avatar/{{$usuarios->avatar }}">
                    </div>    
                    <div class="exame-info user-info">
                        <h4>Nome</h4>
                        <p>{{$usuarios->name}}</p>
                        <h4>Matricula</h4>
                        <p>{{$usuarios->matriculaPaciente}}</p>
                        <h4>Tipo</h4>
                        <p>{{$usuarios->tipo}}</p>
                        <h4>Email</h4>
                        <p>{{$usuarios->email}}</p>
                        <h4>Data do Registro</h4>
                        <p>{{$usuarios->created_at->format('d/m/Y')}}</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
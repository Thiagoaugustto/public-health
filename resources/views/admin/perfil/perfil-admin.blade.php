@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>Perfil do administrador</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <img src="/imagens/avatar/{{$user->avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
                    <h2>{{$user->name}}</h2>
                    <form enctype="multipart/form-data" action="{{route('Adminperfil.index')}}" method="POST">
                    <label>Atualizar imagem do perfil</label>
	                    <input type="file" name="avatar">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <input type="submit" class="pull-right btn btn-sm btn-primary"> 	
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

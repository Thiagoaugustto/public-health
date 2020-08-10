@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel">
              <div class="panel-heading" style="margin-left: 255px;">
                  <h4>Lista de usuários do sistema</h4>
              </div>
              <div class="panel-body" style="margin-left: 255px;">
                <br/>
                <div class="col-sm-12 col-bottom-20">
                  <form action="{{ route('admin.seach') }}" name="search" class="search" method="post">
                      {{ csrf_field() }}
                      <input type="text" placeholder="Digite a matricula do usuário" class="form-control" name="matriculaPaciente">
                      <button type="submit" class="btn btn-info" style="margin-left: 15px;" title="Pesquisar">Pesquisar</button>
                  </form>
                </div>
                <table class="table lista-user">
                  <thead class="thead-default">
                    <tr>
                      <th>Matricula</th>
                      <th>Avatar</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Tipo</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($usuarios as $user)
                    <tr  class="lista" id="dados{{$user->id}}">
                      <td>{{$user->matriculaPaciente }}</td>
                      <td style="width: 73px;
                        padding-right: 0px;">
                        <img src="/imagens/avatar/{{$user->avatar }}" style="width: 100%;
                          max-width: 45px;
                          height: auto;
                          border-radius: 50%;">
                      </td>
                      <td>{{$nomeusuario= str_limit($user->name, 20) }}</td>
                      <td>{{$user->email }}</td>
                      <td>{{$user->tipo}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('admin', $user->id)}}">Detalhes</a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>  
                </table>
                {!! $usuarios->links() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
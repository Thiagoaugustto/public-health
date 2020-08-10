@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container" style="padding-top: 55px;">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel">
                <div class="panel-heading" style="margin-left: 255px;">
                    <h4>{{$exames->nome_exame}}</h4>
                </div>
                <div class="panel-body" style="margin-left: 255px;">
                    <div class="exame-info">
                        <h4>Resumo</h4>
                        <p>{{$exames->sub_titulo}}</p>
                        </br>
                        <h4>Procedimento</h4>
                        <iframe width="550" name="procedure" class="iframe-mob" height="315" src="{{ url("{$exames->procedimento}") }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </br></br>
                        <h4>Material análisado</h4>
                        <p>{{$exames->material_analisado}}</p>
                        </br>
                        <h4>Tempo do exame</h4>
                        <p>{{$exames->tempo_coleta_material}} minutos</p>
                        </br>
                        <h4>Finalidade</h4>
                        <p>{{$exames->finalidade}}</p>
                        </br>
                        <h4>Preparação prévia</h4>
                        <p>{{$exames->preparacao_previa}}</p>
                        </br>
                        <h4>Valores Normais</h4>
                        <p>{{$exames->valores_normais_descr}}</p>
                        </br>
                        <h4>Prazo resultado</h4>
                        <p>{{$exames->prazo_resultado}} minutos</p>
                        </br>
                        <h4>Nivel de confiabilidade</h4>
                        <p>{{$exames->nivel_confiabilidade}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
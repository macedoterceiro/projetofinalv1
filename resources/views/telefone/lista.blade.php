@extends('layouts.app', ["current" => "telefones"])

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Telefones</h5>
        @if(count($tels)>0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Telefones</th>                  
                </tr>
            </thead>
            <tbody>
                @foreach($tels as $tel)
                    <tr>
                        <td>{{$tel->id}}</td>
                        <td>{{$tel->tel_numero}}</td>
                        <td>
                            <a href="/contatos/{{$idcon}}/telefones/editar/{{$tel->id}}" class="btn btn-sn btn-primary">Editar</a>
                            <a href="/contatos/{{$idcon}}/telefones/apagar/{{$tel->id}}" class="btn btn-sn btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/contatos/{{$idcon}}/telefones/novotelefone" class="btn btn-sn btn-primary">Novo Telefone</a>
    </div>
</div>

@endsection
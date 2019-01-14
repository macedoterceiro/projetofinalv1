@extends('layouts.app', ["current" => "contatos"])

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Contatos</h5>
        @if(count($cons)>0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Contatos</th>     
                </tr>
            </thead>
            <tbody>
                @foreach($cons as $con)
                    <tr>
                        <td>{{$con->id}}</td>
                        <td>{{$con->con_nome}}</td>
                        <td><a href="/contatos/{{$con->id}}/telefones" class="btn btn-sn btn-secondary">Lista de Telefones</a></td>
                        <td>
                            <a href="/contatos/editar/{{$con->id}}" class="btn btn-sn btn-primary">Editar Contato</a>
                            <a href="/contatos/apagar/{{$con->id}}" class="btn btn-sn btn-danger">Apagar Contato</a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/contatos/novocontato" class="btn btn-sn btn-primary">Novo Contato</a>
    </div>
</div>

@endsection
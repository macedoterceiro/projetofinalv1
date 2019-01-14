@extends('layouts.app', ["current" => "contatos"])

@section('content')
<div class="card border">
    <div class="card-body">
        <form action="/contatos/{{$con->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="con_nome">Nome do Contato</label>
                <input type="text" class="form-control" name="con_nome" value="{{$con->con_nome}}" id="con_nome" placeholder="{{$con->con_nome}}">            
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
       
@endsection

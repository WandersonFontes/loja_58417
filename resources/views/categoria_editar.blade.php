@extends('layout.base', ["current"=>"categorias"])

@section('body')
    <form action = "/categoria/{{$categoria->id}}" method = "POST">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Categoria</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$categoria->nome}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection
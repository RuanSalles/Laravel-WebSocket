@extends('layouts.app')

@section('content')
<form action="store" method="POST">
    @csrf
    <input type="text" name="titulo" id="" placeholder="Título">
    <input type="text" name="mensagem" id="" placeholder="Mensagem">
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
</form>
@endsection

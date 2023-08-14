@extends('layout')

@section('title', 'Github API App')

@section('content')
    <h1>Github API App</h1>
    <form id="formUser" action="{{ route('getUser') }}" method="get">
        <input type="text" name="username" id="username" placeholder="Digite o nome de usuário">
        <button type="submit">Buscar</button>
    </form>
@endsection

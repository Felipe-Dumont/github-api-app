@extends('layout')

@section('title', 'Repositórios do Usuário')

@section('content')
    <h1>Repositórios de {{ $username }}</h1>

    <div class="repositories-list">
        @foreach($repositories as $repository)
        <div class="repository">
            <h2>{{ $repository['name'] }}</h2>
            <p>{{ $repository['description'] }}</p>
            <p><i class="fas fa-code-branch"></i> Branch padrão: {{ $repository['default_branch'] }}</p>
            <p><i class="fas fa-star"></i> Stars: {{ $repository['stargazers_count'] }}</p>
            <p><i class="fas fa-eye"></i> Watchers: {{ $repository['watchers_count'] }}</p>
            <p><i class="fas fa-code"></i> Linguagem: {{ $repository['language'] }}</p>
            <a href="{{ $repository['html_url'] }}" target="_blank">Ver no GitHub</a>
        </div>
        @endforeach
    </div>

    <a href="{{ route('index') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Home</a>
@endsection

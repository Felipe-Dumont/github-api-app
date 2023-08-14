@extends('layout')

@section('title', 'Detalhes do Usuário')

@section('content')
    @isset($user)
        <h1>Dados do Usuário</h1>
        <div class="user-details">
            <div class="avatar-container">
                <img class="user-avatar" src="{{ $user->getAvatarUrl() }}" alt="{{ $user->getName() }}">
            </div>
            <div class="user-info">
                <h2>{{ $user->getName() }}</h2>
                <p><i class="fas fa-user"></i> {{ $user->getLogin() }}</p>
                <p><i class="fas fa-envelope"></i> {{ $user->getEmail() }}</p>
                <p><i class="fas fa-link"></i> <a href="{{ $user->getHtmlUrl() }}" target="_blank">Perfil no GitHub</a></p>
                <p><i class="fas fa-calendar"></i> Data de Criação: {{ date('d/m/Y', strtotime($user->getCreatedAt())) }}</p>
                <p><i class="fas fa-code"></i> {{ $user->getPublicRepos() }} repositórios públicos</p>
                <a href="{{ route('showRepositories', ['username' => $user->getLogin() ]) }}">Ver Repositórios</a>
            </div>
        </div>
    @else
        <p>Usuário não encontrado.</p>
    @endisset

    <a href="{{ route('index') }}" class="btn-back">Home</a>
@endsection

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Retrô FC - Sócio-Torcedor')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/retro.css') }}">
</head>
<body>
<header class="topo">
    <a class="marca" href="{{ route('home') }}">Retrô FC <span> | Sócio-Torcedor</span></a>
</header>
<nav class="barra">
    <a class="hamburguer" href="{{ route('home') }}">☰</a>
    <div class="links-topo">
        <a href="{{ route('socios.create') }}">Cadastro</a>
        <a href="{{ route('socios.index') }}">Sócios cadastrados</a>
        <a href="{{ route('socios.create') }}">Login</a>
    </div>
</nav>
<div class="estrutura">
    <aside class="menu">
        <a href="{{ route('home') }}">▣ Painel Principal</a>
        <a href="{{ route('socios.create') }}">🎟 Ingressos</a>
        <a href="{{ route('home') }}#beneficios">👥 Benefícios</a>
        <a href="{{ route('home') }}#jogos">▦ Jogos</a>
        <a href="{{ route('socios.index') }}">▤ Contratos</a>
        <a href="{{ route('socios.create') }}">🤝 Sócio</a>
    </aside>
    <main class="conteudo">
        @if(session('sucesso'))
            <div class="alert alert-success">{{ session('sucesso') }}</div>
        @endif
        @yield('conteudo')
    </main>
</div>
<footer>Retrô FC • Juntos somos mais fortes</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

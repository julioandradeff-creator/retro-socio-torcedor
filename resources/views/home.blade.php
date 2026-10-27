@extends('layouts.app')
@section('titulo', 'Retrô FC - Página inicial')
@section('conteudo')
<section class="hero">
    <div class="hero-texto">
        <span class="etiqueta">PAIXÃO QUE NOS UNE</span>
        <h1>Juntos somos<br><strong>mais fortes!</strong></h1>
        <p>Faça parte da família Retrô FC. Cadastre-se como sócio e fique mais perto do nosso clube.</p>
        <a class="btn-amarelo" href="{{ route('socios.create') }}">QUERO SER SÓCIO</a>
    </div>
</section>
<section class="blocos" id="beneficios">
    <article><div class="icone">🎟</div><h2>Ingressos</h2><p>Prepare-se para acompanhar o Retrô FC.</p></article>
    <article><div class="icone">⭐</div><h2>Benefícios</h2><p>Escolha seu plano e faça parte da torcida.</p></article>
    <article id="jogos"><div class="icone">⚽</div><h2>Jogos</h2><p>Viva cada momento junto com o clube.</p></article>
</section>
@endsection

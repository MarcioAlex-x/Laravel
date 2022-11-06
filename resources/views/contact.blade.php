
@extends('layouts.main')

@section('title','Fale conosco')

@section('content')

<h1>Contato</h1>
<hr>


<a href="/"><button>Voltar ao Home</button></a>
<a href="/produtos"><button>Ir para produtos</button></a>
<hr>

<p>{{ $nome }}</p>

@endsection

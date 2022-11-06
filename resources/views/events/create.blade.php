@extends('layouts.main')

@section('title','Criar Evento')

@section('content')

<div id="event-create-content" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="image">Imagem do evento:</label>
        <input type="file" class="form-control-file" id="title"  name="image" placeholder="Imagem do evento" >
    </div>
    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title"  name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
        <label for="date">Data do evento:</label>
        <input type="date" class="form-control" id="date"  name="date" >
    </div>

    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city"  name="city" placeholder="Local do evento">
    </div>

    <div class="form-group">
        <label for="title">O evento é privado?:</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento? "></textarea>
    </div>
    <div class="form-group form-group-check">
        <label for="title">Adicione itens de infraestrutura:</label>
        <div class="form-group">
            <input class="checkbox" type="checkbox" name="items[]" value="Cadeiras">Cadeiras
            <input class="checkbox" type="checkbox" name="items[]" value="Palco">Palco
            <input class="checkbox" type="checkbox" name="items[]" value="cerveja grátis">Cerveja grátis
            <input class="checkbox" type="checkbox" name="items[]" value="Open food">Open food
            <input class="checkbox" type="checkbox" name="items[]" value="Brindes">Brindes
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection




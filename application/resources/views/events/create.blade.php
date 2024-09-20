@extends('layouts.main')

@section('title', 'Criar um Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
             <label for="image">Imagem do Evento:</label>
             <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
             <label for="title">Evento:</label>
             <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">   
            </div>

            <div class="form-group">
             <label for="title">Cidade:</label>
             <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">   
            </div>

            <div class="form-group">
             <label for="title">O Evento e privado?</label>
             <select name="private" id="private" class="form-control">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
             </select>
            </div>

            <div class="form-group">
             <label for="title">Descricao:</label>
             <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>

            <div class="form-group">
             <label for="title">Adicione itens de infraestrutura:</label>
             <div class="from-group">
                <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
             </div>

             <div class="from-group">
                <input type="checkbox" name="items[]" value="Palco">Palco
             </div>

             <div class="from-group">
                <input type="checkbox" name="items[]" value="Cerveja gratis">Cerveja gratis
             </div>

             <div class="from-group">
                <input type="checkbox" name="items[]" value="open Food">Open Food
             </div>

             <div class="from-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
             </div>
             
            </div>

            <input type="submit" value="Criar Evento" class="btn btn-primary">

        </form>
    </div>
@endsection
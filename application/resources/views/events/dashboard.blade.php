@extends('layouts.main')

@section('title', 'Dashbord')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participante</th>
                        <th scope="col">Accoes</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($events as $event)

                        <tr>
                            <td scope="row">{{$loop->index + 1}}</td>
                            <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                            <td>0</td>
                            <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        @else
            <p>Voce ainda nao tem eventos, <a href="/events/create">Criar Evento</a></p>
        @endif    
    </div>

@endsection
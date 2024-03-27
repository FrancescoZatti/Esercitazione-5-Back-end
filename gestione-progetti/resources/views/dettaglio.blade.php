@extends('templates.layout')
@section('title', 'Info Project')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent border-0">
                    <h2 class="card-title">{{$progetto->titolo}}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$progetto->descrizione}}</p>
                    <p class="card-text"><small class="text-body-secondary">Ultimo aggiornamento: {{$progetto->updated_at}}</small></p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="/dashboard" class="btn btn-outline-dark d-block">Indietro</a>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($progetto->attivitas as $key => $attivita)
                            <tr>
                                <td>{{$attivita->nome}}</td>
                                <td>{{$attivita->descrizione}}</td>
                                <td><a href="/attivita/{{$attivita->id}}" class="btn btn-sm btn-primary">Dettaglio</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('templates.layout')
@section('title', 'Info Project')


@section('content')
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$progetto->titolo}}</h5>
                <p class="card-text">{{$progetto->descrizione}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated {{$progetto->updated_at}}</small></p>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-outline-dark d-block" href="/dashboard">Back</a>
            </div>
            
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Azioni</th>
                </tr>
                @foreach($progetto->attivitas as $key => $attivita)
                    <tr>
                        <td>{{$attivita->nome}}</td>
                        <td>{{$attivita->descrizione}}</td>
                        <td><a href="/attivita/{{$attivita->id}}">Dettaglio</a></td>
                    </tr>
                @endforeach
            </table>

            
        </div>
    </div>
@endsection
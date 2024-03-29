@extends('templates.layout')
@section('title', 'Info Project')


@section('content')
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$attivita->nome}}</h5>
                <p class="card-text">{{$attivita->descrizione}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated {{$attivita->updated_at}}</small></p>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-outline-dark d-block" href="/dashboard">Back</a>
            </div>
        </div>
    </div>
@endsection
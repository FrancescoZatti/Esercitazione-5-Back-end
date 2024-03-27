<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-4">Create New Project</h1>
    <p>Author: {{ auth()->user()->name }}</p>

    <form action="{{ route('progetto.store') }}" method="POST">
        @csrf
        <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
        <div class="mb-3">
            <label for="titolo" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control mb-3" id="titolo" name="titolo" placeholder="Inserisci il nome del progetto">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" id="descrizione" name="descrizione" rows="3" placeholder="Inserisci la descrizione del progetto"></textarea>
        </div>
        <input type="hidden" name="id" value="{{ $newProjectId }}">
        <button type="submit" class="btn btn-primary">Crea Progetto</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

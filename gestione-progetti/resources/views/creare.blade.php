<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="mt-5 mb-4">Create New Project</h1>
        <p>Author: {{ auth()->user()->name }}</p>

        <form action="{{ route('progetto.store') }}" method="POST">
            @csrf
            <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="titolo" name="titolo">
                <input type="text" class="form-control" id="descrizione" name="descrizione">
            </div>
            <input type="hidden" name="id" value="{{ $newProjectId }}">
            <button type="submit" class="btn btn-primary">Crea Progetto</button>
        </form>
    </div>
</body>
</html>
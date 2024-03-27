<x-app-layout>
    <!-- <div class="py-12"> -->
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
            <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
                <!-- <div class="p-6 text-gray-900"> -->
                @extends('templates.layout')
                @section('title', 'Tabella Progetti')
                @section('content')
                <a type="button" class="btn btn-primary my-2 w-100" href="{{ route('progetto.create') }}">Aggiungi progetto</a>
                <table class="table align-middle mt-4">
                    <thead class="table-light align-middle text-center">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Users_ID</th>
                        <th scope="col">Attivita_ID</th>
                        <th scope="col">Creato in data</th>
                        <th scope="col">Modificato in data</th>
                        <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if($progetto)
                            @foreach($progetto as $key => $progetti)
                                <tr>
                                    <th scope="row">{{$progetti->id}}</th>
                                    <td>{{ $progetti->titolo }}</td>
                                    <td>{{ $progetti->descrizione }}</td>
                                    <td class="text-center">{{ $progetti->users_id }}</td>
                                    <td class="text-center">{{ $progetti->attivitas_id }}</td>
                                    <td>{{ $progetti->created_at }}</td>
                                    <td>{{ $progetti->updated_at }}</td>
                                    <td>
                                        <a type="button" class="btn btn-outline-info w-100" href="/progetto/{{$progetti->id}}">Info</a>
                                        <form action="{{ route('progetto.destroy', $progetti->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Elimina Progetto</button>
                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </table>
                    @endsection
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
</x-app-layout>
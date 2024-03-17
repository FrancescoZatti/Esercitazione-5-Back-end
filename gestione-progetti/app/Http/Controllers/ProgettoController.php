<?php

namespace App\Http\Controllers;

use App\Models\Progetto;
use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use Illuminate\Support\Facades\Auth;

class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progetti = Progetto::where('users_id', Auth::id())->get();
        return view('dashboard', ['progetti' => $progetti]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latestProjectId = Progetto::max('id');
        $newProjectId = $latestProjectId + 1;
        return view('creare', ['newProjectId' => $newProjectId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        $validatedData = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'required|string|max:255',
        ]);

        $progetto = new Progetto();
        $progetto->titolo = $validatedData['titolo'];
        $progetto->descrizione = $validatedData['descrizione'];
        $progetto->users_id = Auth::id();
        $progetto->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetto)
    {
        return view('dettaglio', ['progetto' => $progetto->load('attivitas')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        $progetto->delete();
    return redirect()->route('dashboard');
    }


}

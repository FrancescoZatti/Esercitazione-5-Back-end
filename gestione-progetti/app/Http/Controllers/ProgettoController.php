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
        $progetti = Progetto::where('user_id', Auth::id())->get();
        return view('dashboard', ['progetti' => $progetti]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $progetto = Progetto::find($id);
        $progetti = Progetto::where('user_id', Auth::id())->get();
        return view('dettaglio', ['progetti' => $progetti]);
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
        //
    }
}

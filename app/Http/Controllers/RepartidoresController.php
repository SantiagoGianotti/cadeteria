<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRepartidorRequest;
use App\Http\Requests\UpdateRepartidorRequest;
use App\Models\Repartidor;
use Inertia\Inertia;

class RepartidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('Repartidor/Index', [
            'repartidores' => Repartidor::when($request->has(['campo', 'busqueda']), function ($query) use ($request)
            {
                $query->where($request->campo, 'like', "%".$request->busqueda."%");
            })->paginate(15)
            ->withQueryString()
        ]);
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
    public function store(StoreRepartidorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Repartidor $repartidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repartidor $repartidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRepartidorRequest $request, Repartidor $repartidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repartidor $repartidor)
    {
        //
    }
}

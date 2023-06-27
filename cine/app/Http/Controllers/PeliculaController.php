<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peliculas = Pelicula::all();

        return view(
            'peliculas.index',
            [
                'peliculas' => $peliculas
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos
        $request->validate(
            [
                'titulo' => 'required|max:100',
                'artistas_principales' => 'required|max:100',
                'anio' => 'required|numeric',
                'productora' => 'required|max:100',
                'genero' => 'required|max:100'
            ]
        );

        // Creamos el objeto
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->artistas_principales = $request->artistas_principales;
        $pelicula->anio = $request->anio;
        $pelicula->productora = $request->productora;
        $pelicula->genero = $request->genero;

        // Guardamos el objeto
        $pelicula->save();
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        // Vista para mostrar un objeto
        return view(
            'peliculas.view',
            [
                'pelicula' => $pelicula
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        // Vista para editar un objeto
        return view(
            'peliculas.edit',
            [
                'pelicula' => $pelicula
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        // Validamos los datos
        $request->validate(
            [
                'titulo' => 'required|max:100',
                'artistas_principales' => 'required|max:100',
                'anio' => 'required|numeric',
                'productora' => 'required|max:100',
                'genero' => 'required|max:100'
            ]
        );

        // Actualizamos el objeto
        $pelicula->titulo = $request->titulo;
        $pelicula->artistas_principales = $request->artistas_principales;
        $pelicula->anio = $request->anio;
        $pelicula->productora = $request->productora;
        $pelicula->genero = $request->genero;
        $pelicula->save();

        return redirect()->route('peliculas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        // Eliminamos el objeto de la base de datos
        $pelicula->delete();
        return redirect()->route('peliculas.index');

    }
}
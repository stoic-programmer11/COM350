<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Hacemos para el read xd
        // Esto es lo mismo que hacer SELECT * FROM
        $editoriales = Editorial::all();

        // Le pasamos los datos a la vista
        // En formato de arreglo
        return view(
            'editoriales.index',
            [
                'editoriales' => $editoriales
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
        return view('editoriales.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validamos los datos
        $request->validate([
            'nombre' => 'required'
        ]);

        // Creamos el objeto
        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->save();

        // Redireccionamos
        return redirect()->route('editoriales.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Editorial $editoriale)
    {
        // Vista para mostrar un solo objeto
        return view(
            'editoriales.view',
            [
                'editorial' => $editoriale
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Editorial $editoriale)
    {
        // Vista para editar un objeto
        return view(
            'editoriales.edit',
            [
                'editorial' => $editoriale
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Editorial $editoriale)
    {
        // Validamos los datos
        $request->validate([
            'nombre' => 'required'
        ]);

        // Actualizamos el objeto
        $editoriale->nombre = $request->nombre;
        $editoriale->save();

        // Redireccionamos
        return redirect()->route('editoriales.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Editorial $editoriale)
    {
        // Eliminamos el objeto de la base de datos

        $editoriale->delete();
        return redirect()->route('editoriales.index');
    }
}

/**
 * Se requiere hacer un sistema informatico web
 * para la administracion de un cine que cuent con 8 salas de presentacion
 * de diferentes tipos (3d, 3d max, y 2d), cada sala tiene una programacion
 * de peliculas por horas y fechas, los precios son por dias y se debe controlar
 * la cantidad de taquillas vendidas, las peliculas tienen titulo, artistas,
 * principales, año, productora y genero. El sistema debe permitir hacer el control
 * y venta de entradas, debe imprimir los boletos y obtener reportes por dia, semana
 * y mes de tasas de ocupacion y duracion de la exhibicion de la pelicula.
 * a) Realizar el diagrama de casos de uso inicial
 */
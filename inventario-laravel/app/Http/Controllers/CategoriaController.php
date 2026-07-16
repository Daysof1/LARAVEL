<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     *  muestra las categorias disponibles
     */
    public function index()
    {
        $categorias = Categoria::all();
        return viwe('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'require|string|max:255|unique:categorias'
        ]);
        categoria::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $request->validate([
            'nombre' => 'required|string|man:255|unique:categoria,nombre,'.$categoria->id
        ]);
        $categoria->update([
            'nombre' => $request->nombre
        ]);
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada exitoamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categpria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria eliminada exitoamente');
    }
}

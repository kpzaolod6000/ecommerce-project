<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('category.index ', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Categoria::create($request->all());

        return redirect()->route('category.index')->with('create', 'Registro agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $categoria->update($request->all());

        return redirect()->route('category.index')->with('update', 'Registro actualizado correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

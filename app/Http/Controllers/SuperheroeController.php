<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all(); 

    return view('superheroe.index', compact('superheroes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroe.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'nombre_real' => 'required|max:75', 
            'alias' => 'required|max:75', 
            'foto' => 'required|max:75', 
            'informacion' => 'required', 
          ]); 
          Superheroe::create($validatedData); 
        
          return redirect('/superheroe')->with('success', 'Superheroe registrado'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id); 

        return view('superheroe.show', compact('superheroe')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id); 

        return view('superheroe.edit', compact('superheroe')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([ 
            'nombre_real' => 'required|max:75', 
            'alias' => 'required|max:75', 
            'foto' => 'required|max:75', 
            'informacion' => 'required', 
          ]); 
          Superheroe::whereId($id)->update($validatedData); 
        
          return redirect('/superheroe')->with('success', 'Datos actualizados'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id); 
        $superheroe->delete(); 

    return redirect('/superheroe')->with('success', 'superheroe eliminado');
    }
}

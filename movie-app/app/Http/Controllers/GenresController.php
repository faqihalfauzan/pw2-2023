<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();

        return view('genres/index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        return view('genres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required', 
        ]);
    
        Genres::create($validateData);
    
        return redirect('/genres')->with('success', 'genres added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genres $genres)
    {
        

        return view('genres.edit', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genres $genres)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $genres->update($validatedData);
    
        return redirect('/genres')->with('success', 'genres updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genres $genres)
    {
        $genres->delete();
        
        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}

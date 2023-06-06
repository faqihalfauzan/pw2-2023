<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Users;
use App\Models\Reviews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();

        return view('reviews/index', compact('reviews'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
       
        $reviews = Reviews::all();
        return view('reviews.create', compact(('movies'),));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'film_id' => 'required',
            'user_id' => 'required', 
            'rating' => 'required',
            'reviews' => 'required',
            'tanggal' => 'required|integer',
        ]);
    
        Reviews::create($validateData);
    
        return redirect('/reviews')->with('success', 'Movie added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        return view('reviews.edit', compact('reviews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reviews $reviews)
    {
        $validateData = $request->validate([
            'film_id' => 'required',
            'user_id' => 'required', 
            'rating' => 'required',
            'reviews' => 'required',
            'tanggal' => 'required|integer',
        ]);
    
        Reviews::create($validateData);
    
        return redirect('/reviews')->with('success', 'Reviews Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        $reviews->delete();
        
        return redirect('/reviews')->with('success', 'Reviews deleted successfully!');
    }
}

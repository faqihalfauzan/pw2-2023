<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Reviews;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $users = User::all();
        return view('users.create', compact('users'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required',
            'role' => 'required|integer',
        ]);
        
        User::create($validateData);
    
        return redirect('/users')->with('success', 'user added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::all();

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required',
            'role' => 'required|integer',
        ]);
    
        $user->update($validateData);
    
        return redirect('/user')->with('success', 'user updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect('/user')->with('success', 'user deleted successfully!');
    }
}



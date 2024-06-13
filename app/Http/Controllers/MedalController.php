<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medal;

class MedalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medals = Medal::all();
        return response()->json($medals);    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showById(string $id)
    {
        $medal = Medal::findOrFail($id);
        return response()->json($medal);  
    }

    public function showByName(string $name)
    {
        $medal = Medal::where('name', $name)->first();
        return response()->json($medal);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

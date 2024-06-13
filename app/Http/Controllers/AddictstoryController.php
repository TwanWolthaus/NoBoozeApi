<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Addictstory;

class AddictstoryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addictstories = Addictstory::all();
        return response()->json($addictstories);   
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
        $addictstory = Addictstory::findOrFail($id);
        return response()->json($addictstory);  
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

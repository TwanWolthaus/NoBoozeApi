<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\UserMedal;


class UserMedalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $rules= [
            'user_id'=>'required|integer',
            'medal_id'=> 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userMedal = UserMedal::create([
            'user_id' => $request->user_id,
            'medal_id' => $request->medal_id,
        ]);

        return response()->json(['message' => 'UserMedals updated successfully', 'userMedal' => $userMedal], 200);
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

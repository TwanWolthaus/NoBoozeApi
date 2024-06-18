<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserMedalController;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMedal;

use Illuminate\Support\Facades\Validator;


class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function showMedals(string $id)
    {
        $user = User::findOrFail($id);
        $medals = $user->userMedals->map(function (UserMedal $user_medal) {
            return $user_medal->medal;
        });
        return response()->json($medals);
    }

    public function extract(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules= [
            'money_saved' =>            'sometimes|numeric',
            'original_motivation' =>    'sometimes|string|max:255',
            'dry_days' =>               'sometimes|integer',
            'streak' =>                 'sometimes|integer',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::findOrFail($id);
        $user->update($request->only(['money_saved', 'original_motivation', 'dry_days', 'streak']));
        $user->save();

        if ($request->has('money_saved')) {
            $newMedal = (new UserMedalController)->reevaluateMoney($id);
        }

        // returns a response :)
        return response()->json(['message' => 'User updated successfully', 'new_medal' => $newMedal, 'user' => $user], 200);
    }


    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully', 'user' => $user], 200);
    }
}

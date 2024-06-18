<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\UserMedal;
use App\Models\User;
use App\Models\Medal;


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

    public function reevaluateMoney(string $userId)
    {
        $user = User::findOrFail($userId);
        $moneySaved = $user->money_saved;
        $medalId = null;

        // Meneer Gouwerok, als u dit ziet: dit is kut geprogrammeerd, maar het is laat en ik wil slapen.

        if ($moneySaved >= 25000) {
            $medalId = Medal::where('name', 'Orchid Medal')->first()->id;
        }
        else if ($moneySaved >= 10000) {
            $medalId = Medal::where('name', 'Rose Medal')->first()->id;
        }
        else if ($moneySaved >= 5000) {
            $medalId = Medal::where('name', 'Tulip Medal')->first()->id;
        }
        else if ($moneySaved >= 2500) {
            $medalId = Medal::where('name', 'Lily Medal')->first()->id;
        }
        else if ($moneySaved >= 1000) {
            $medalId = Medal::where('name', 'Sunflower Medal')->first()->id;
        }
        else if ($moneySaved >= 500) {
            $medalId = Medal::where('name', 'Daisy Medal')->first()->id;
        }
        else if ($moneySaved >= 250) {
            $medalId = Medal::where('name', 'Daffodil Medal')->first()->id;
        }

        if ($medalId == null) {
            return "No medal earned";
        }

        $duplicateMedal = UserMedal::where('user_id', $userId)
            ->where('medal_id', $medalId)
            ->first();
        
        if ($duplicateMedal) {
            $duplicateName = Medal::where('id', $duplicateMedal->medal_id)->first()->name;
            return "User already has " . $duplicateName;
        }

        $userMedal = UserMedal::create([
            'user_id' => $userId,
            'medal_id' => $medalId,
        ]);

        return $userMedal;
    }


    public function reevaluateStreak(string $userId)
    {
        $user = User::findOrFail($userId);
        $streak = $user->streak;
        $medalId = null;

        // Meneer Gouwerok, als u dit ziet: dit is kut geprogrammeerd, maar het is laat en ik wil slapen.

        if ($streak >= 1095) {
            $medalId = Medal::where('name', 'Diamond Medal')->first()->id;
        }
        else if ($streak >= 730) {
            $medalId = Medal::where('name', 'Platinum Medal')->first()->id;
        }
        else if ($streak >= 365) {
            $medalId = Medal::where('name', 'Gold Medal')->first()->id;
        }
        else if ($streak >= 182) {
            $medalId = Medal::where('name', 'Silver Medal')->first()->id;
        }
        else if ($streak >= 91) {
            $medalId = Medal::where('name', 'Bronze Medal')->first()->id;
        }
        else if ($streak >= 30) {
            $medalId = Medal::where('name', 'Copper Medal')->first()->id;
        }
        else if ($streak >= 14) {
            $medalId = Medal::where('name', 'Iron Medal')->first()->id;
        }
        

        if ($medalId == null) {
            return "No medal earned";
        }

        $duplicateMedal = UserMedal::where('user_id', $userId)
            ->where('medal_id', $medalId)
            ->first();
        
        if ($duplicateMedal) {
            $duplicateName = Medal::where('id', $duplicateMedal->medal_id)->first()->name;
            return "User already has " . $duplicateName;
        }

        $userMedal = UserMedal::create([
            'user_id' => $userId,
            'medal_id' => $medalId,
        ]);

        return $userMedal;
    }

    public function destroy(string $id)
    {
        //
    }
}

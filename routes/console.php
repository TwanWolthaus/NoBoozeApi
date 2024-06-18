<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;
 
Schedule::call(function () {
    DB::table('recent_users')->delete();
})->daily();
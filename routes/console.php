<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;
 
$schedule->call(function () {
    DB::table('users')->increment('streak');
    DB::table('users')->increment('dry_days');
})->everyMinute();

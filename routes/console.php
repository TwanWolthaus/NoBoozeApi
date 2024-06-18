<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Artisan;


// IMPORTANT!
//
// If this is not working, run 'php artisan schedule:list'.
// If it shows '* * * * * 1d  php artisan increment:dry-days', make sure you have a crontab enabled that runs this schedule.

Artisan::command('increment:dry-days', function () {
  
    DB::table('users')->increment('dry_days');
    DB::table('users')->where('streak', 0)->decrement('dry_days');
    DB::table('users')->increment('streak');

})->daily()->runInBackground();


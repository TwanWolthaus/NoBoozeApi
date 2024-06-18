<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class UserMedal extends Model
{
    use HasFactory;

    protected $table = 'user_medal';


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function medal(): HasOne
    {
        // return "fsefsf";
        return $this->hasOne(Medal::class, 'id', 'medal_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medal extends Model
{
    use HasFactory;

    protected $table = 'medal';

    public function userMedals(): HasMany
    {
        return $this->hasMany(UserMedal::class);
    }
}

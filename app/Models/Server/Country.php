<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'adresse',
        'ice'

    ];
    
}

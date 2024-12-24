<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $fillable = ['name', 'description', 'address', 'photo', 'city', 'price'];
}

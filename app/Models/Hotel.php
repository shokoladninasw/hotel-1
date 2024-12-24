<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'dignities', 'disadvantages'];
    public function reviews() {
        return $this->hasMany(Review::class); // Отель может иметь много отзывов
    }
}

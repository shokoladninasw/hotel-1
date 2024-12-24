<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'dignities', 'disadvantages', 'hotelId'];

    // Обратная связь с отелем
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}

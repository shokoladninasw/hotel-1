<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Admin;

class HotelController extends Controller
{
    public function more(Request $request) {
        return view('hotel');
    }

    public function showReview()
    {
        // Извлекаем все отзывы из базы данных
        $reviews = Admin::orderBy('created_at', 'desc')->get();
    
        // Проверка данных
        \Log::info('Reviews: ', $reviews->toArray());
    
        return view('hotel', compact('reviews'));
    }
    
    

    public function create(Request $request, $id) {
        $hotelId = Hotel::findOrFail($id);

        $hotelId->reviews()->create([
            'name' => $request -> name,
            'dignities' => $request -> dignities,
            'disadvantages' => $request -> disadvantages
        ]);
        return redirect('/hotel');
    }
}

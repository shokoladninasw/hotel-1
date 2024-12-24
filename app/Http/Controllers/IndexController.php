<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Hotels;
use App\Models\Hotel;

class IndexController extends Controller
{
    public function orderByCity() {
        $newHotels = Admin::all();
        return view('index', compact('newHotels'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $searchHotel = Admin::where('name', 'like', '%' . $query . '%')->get();
        return view('index', compact('searchHotel'));
    }
}

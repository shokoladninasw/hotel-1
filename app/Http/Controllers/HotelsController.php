<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class HotelsController extends Controller
{
    public function hotels(Request $request) {
        return view('/hotels');
    }

    public function index(Request $request) {
        $city = $request->route('city');
        $city = $request->query('city');
        if ($city) {
            $newHotels = Admin::where('city', $city)->orderBy('name', 'asc')->get();
        } else {
            $newHotels = Admin::orderBy('name', 'asc')->get();
        }
        return view('/hotels', compact('newHotels', 'city'));
    }

    public function moreAboutHotel($id) {
        $aboutHotel = Admin::where('id', $id)->orderBy('name', 'asc')->get();
        return view('/hotel', compact('aboutHotel'));
    }
}

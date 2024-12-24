<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showPanel(){
        return view('admin');
    }

    public function index() {
        $newHotels = Admin::orderBy('created_at', 'desc')->get();
        return view('/admin', compact('newHotels'));
    }
    public function create(Request $request) {
        $request -> validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'city' => 'required|string|max:255',
            'price' => 'required|string|max:255'
        ]);

        Admin::create([
            'name' => $request -> name,
            'address' => $request -> address,
            'description' => $request -> description,
            'photo' => $request -> photo,
            'city' => $request -> city,
            'price' => $request -> price
        ]);
        return redirect('/admin');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        return view('register');
    }

    // Показать форму регистрации
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Обработать регистрацию
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'surname' => $request->surname,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    // Показать форму авторизации
    public function showLoginForm()
    {
        return view('login');
    }

    // Обработать авторизацию
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Выход пользователя
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

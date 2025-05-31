<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $request->session()->regenerate(); //регенерация сессии
            return redirect()->intended(route('pages.home'));// Функция intended() используется для перенаправления пользователя на URL-адрес, который он изначально запрашивал до аутентификации.
        }
        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не совпадают с нашими данными.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}

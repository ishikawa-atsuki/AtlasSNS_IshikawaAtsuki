<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    // バリデーション条件
        $request->validate([
            'username' => 'required|max:12|min:2',
            'email' => 'required|email|max:40|min:5|unique:email',
            'password' => 'required|alpha-num|max:20|min:8',
            'passwordconfirm' => 'same:password'
        ]);
    // 判定
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordconfirm = $request->input('passwordconfirm');
    // 格納
        User::create([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect('added');
    }

    public function added(): View
    {
        return view('auth.added');
    }
}

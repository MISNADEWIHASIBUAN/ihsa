<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function view()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $name = $request->nama;
        $password = $request->password;

        $users = User::where('name', $name)->get();

        if ($users->count() > 0) {
            $user = $users[0];

            $email = $user->email;

            if (Auth::attempt(['email' => $email, 'password' => $password], false)) {
                $request->session()->regenerate();

                return redirect()->route('welcome')->with('success', 'Berhasil Masuk');
            } else {
                return back()->with('error', 'Data yang dimasukkan tidak sesuai');
                // throw ValidationException::withMessages([
                //     'name' => [trans('auth.failed')],
                // ]);
            }
        } else {
            return back()->with('error', 'Nama tidak terdaftar');
        }
    }

    public function logout()
    {
        Auth::logout();

        return back()->with('success', 'Berhasil Logout. Sampai jumpa kembali!');
    }
}

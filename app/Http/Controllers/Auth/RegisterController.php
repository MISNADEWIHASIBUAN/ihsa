<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function view()
    {
        return view('auth.masuk');
    }

    public function authenticate(Request $request)
    {
        try {
            $data = [
                'name' => $request->nama,
                'email' => $request->email,
                'pass' => $request->password,
                'password' => bcrypt($request->password),
            ];

            $user = User::create($data);

            Auth::login($user);

            return redirect()->route('welcome')->with('success', 'Berhasil Masuk');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(
                'error',
                $th->getMessage()
            );
            // return back()->with('error', 'Error: ' . $th->getMessage());
        }
    }
}

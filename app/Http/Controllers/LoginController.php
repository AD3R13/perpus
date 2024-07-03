<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Models\User  as User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /* ! LOGIN ! */
    public function login()
    {
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->to('dashboard');

            // if ($user->usertype == "admin-pelatihan") {
            //     $request->session()->regenerate();
            //     return redirect()->route('home', ['usertype' => $user->usertype]);
            // } else if ($user->usertype == "administrator") {
            //     $request->session()->regenerate();
            //     return redirect()->route('home', ['usertype' => $user->usertype]);
            // }
        }

        // Jika login gagal
        Alert::info('LOGIN GAGAL!', 'Periksa kembali email dan password Anda!');
        return back()->withInput($request->only('email'));
    }


    /* ! LOGOUT ! */
    public function actionLogout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Menonaktifkan session pengguna
        $request->session()->regenerateToken(); // Menghasilkan token baru untuk sesi

        // Redirect ke halaman login
        return redirect()->route('login');
    }


    /* ! REGISTER ! */
    public function register()
    {
        $level = Level::all();
        $usertype = User::with('level')->get();
        return view('register', compact('usertype', 'level'));
    }
    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'id_level' => 'required',
            'password' => 'required',
        ]);
        User::create($request->all());
        Alert::success('Daftar berhasil', 'Success Message!');
        return redirect()->to('register')->with('success', 'Daftar berhasil');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

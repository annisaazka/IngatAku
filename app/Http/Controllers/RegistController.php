<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'is_pro' => 0,
        ]);

        return redirect()->route('register')->with('message', 'Register berhasil!');
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $akun = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)->first();

        // $credentials = $request->only('email', 'password');
        if ($akun) {
            session(['idUser' => $akun->id_user]);
            return redirect("prodashboard");
        }

        return redirect("login");
    }

    public function logout(Request $request)
    {
        $request->session()->forget('idUser');
        $request->session()->flush();
        return redirect("login");
    }
}

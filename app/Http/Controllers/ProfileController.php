<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');
        $data = User::where('id_user', $id)->first();
        return view('profile', compact('data'));
    }

	public function update(Request $request)
	{
        $id = $request->session()->get('idUser');

		$data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
		];

		User::where('id_user', $id)->update($data);

		return redirect()->route('profile.index');
    }
}

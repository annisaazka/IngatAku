<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\daily;

class DailyController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');
        $data['listTaskName'] = DB::table('dailies')
            ->select('task_name')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();
        $data['listTaskStatus'] = DB::table('dailies')
            ->select('task_status')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();
        $data['listTaskRoutine'] = DB::table('dailies')
            ->select('is_routine')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();

        return view('promyday', $data);
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        daily::create([
            'task_name' => $request->taskName,
            'task_status' => $request->status,
            'is_routine' => $request->dailyroutine,
            'id_user' => $id,
        ]);

        return redirect()->route('prodaily.index')->with('message', 'Simpan berhasil!');
    }
}

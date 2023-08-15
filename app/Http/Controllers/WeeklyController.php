<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\weekly;

class WeeklyController extends Controller
{
    /*
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');
        
        $data['listTaskName'] = DB::table('weeklies')
            ->select('task_name')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();
        $data['listTaskDay'] = DB::table('weeklies')
            ->select('task_day')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();

        return view('proweekly', $data);
  
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        weeklies::create([
            'task_name' => $request->taskName,
            'task_day' => $request->day,
            'id_user' => $id,
        ]);

        return redirect()->route('proweekly.index')->with('message', 'Simpan berhasil!');
    }*/

    public function index(Request $request)
    {      
        $id = $request->session()->get('idUser');
        $data = weekly::where('id_user', $id)->get();
        return view('proweekly', compact('data'));
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        weekly::create([
            'task_name' => $request->task_name,
            'task_day' => $request->task_day,
            'id_user' => $id,
        ]);

        return redirect()->route('proweekly.index')->with('message', 'Simpan berhasil!');
    }

    /*public function edit(Request $request)
    {
        return view('edit-todos', compact('request'));
    }*/

    public function addnew()
	{
		return view('edit-weekly');
	}
    
    public function edit($id)
	{
		$data = weekly::find($id);

		return view('edit-weekly', compact('data'));
	}

	public function update($id, Request $request)
	{
		$data = [
            'task_name' => $request->task_name,
            'task_day' => $request->task_day,
		];

		weekly::find($id)->update($data);

		return redirect()->route('proweekly.index');
	}

    public function destroy($id)
    {
        $data = weekly::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Todo list has been deleted.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\notes;

class NotesController extends Controller
{
    public function index(Request $request)
    {
        /*
        $id = $request->session()->get('idUser');
        $data['listTaskName'] = DB::table('notes')
            ->select('task_name')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();
        return view('pronotes', $data);
        */

        $id = $request->session()->get('idUser');

        $data = notes::where('id_user', $id)->get();

        return view('pronotes', compact('data'));
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        notes::create([
            'task_name' => $request->taskName,
            'id_user' => $id,
        ]);

        return redirect()->route('pronotes.index')->with('message', 'Simpan berhasil!');
    }

    public function addnew()
	{
		return view('edit-notes');
	}
    
    public function edit($id)
	{
		$data = notes::find($id);

		return view('edit-notes', compact('data'));
	}

	public function update($id, Request $request)
	{
		$data = [
            'task_name' => $request->taskName,
		];

		notes::find($id)->update($data);

		return redirect()->route('pronotes.index');
	}


    public function destroy($id)
    {
        $data = notes::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Todo list has been deleted.');
    }
}

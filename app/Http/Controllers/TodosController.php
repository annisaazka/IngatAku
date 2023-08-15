<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\to_dos;

class TodosController extends Controller
{
    public function index(Request $request)
    {
        
        $id = $request->session()->get('idUser');
        /*
        $data['task_name'] = DB::table('to_dos')
            ->select('task_name')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();
        $data['task_status'] = DB::table('to_dos')
            ->select('task_status')
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')->get();*/

        $data = to_dos::where('id_user', $id)->get();
        //$data = to_dos::all();
        return view('protodos', compact('data'));
        
        /*return view('protodos', $data);*/
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        to_dos::create([
            'task_name' => $request->taskName,
            'task_status' => $request->status,
            'id_user' => $id,
        ]);

        return redirect()->route('protodos.index')->with('message', 'Simpan berhasil!');
    }

    /*public function edit(Request $request)
    {
        return view('edit-todos', compact('request'));
    }*/

    public function addnew()
	{
		return view('edit-todos');
	}
    
    public function edit($id)
	{
		$data = to_dos::find($id);

		return view('edit-todos', compact('data'));
	}

	public function update($id, Request $request)
	{
		$data = [
            'task_name' => $request->taskName,
            'task_status' => $request->status,
		];

		to_dos::find($id)->update($data);

		return redirect()->route('protodos.index');
	}

    /*
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'task_name' => 'required',
            'task_status' => 'required',
        ]);

        Task::whereId($id)->update($validatedData);

        return redirect()->route('protodos.index')->with('success', 'Task updated successfully');
    }*/

    public function destroy($id)
    {
        $data = to_dos::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Todo list has been deleted.');
    }

    public function todosdash(Request $request)
    {
        $id = $request->session()->get('idUser');
        $data = to_dos::where('id_user', $id)->where('task_status', 'Doing')->get();
        $datatodos = $data->count();
        return view('prodashboard', compact('data','datatodos'));
    }
}

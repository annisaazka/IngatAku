<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\upcoming_task;

class UpcomingController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');
        $data = upcoming_task::where('id_user', $id)->get();
        return view('proupcoming', compact('data'));
    }

    public function store(Request $request)
    {
        $id = $request->session()->get('idUser');
        upcoming_task::create([
            'task_name' => $request->task_name,
            'date_start' => $request->date_start,
            'due_date' => $request->due_date,
            'task_status' => $request->task_status,
            'id_user' => $id,
        ]);

        return redirect()->route('proupcoming.index')->with('message', 'Simpan Berhasil!');
        //return redirect()->route('prodash.index')->with('message', 'Register berhasil!');
    }

    public function addnew()
	{
		return view('edit-upcoming');
	}
    
    public function edit($id)
	{
		$data = upcoming_task::find($id);

		return view('edit-upcoming', compact('data'));
	}

	public function update($id, Request $request)
	{
		$data = [
            'task_name' => $request->task_name,
            'date_start' => $request->date_start,
            'due_date' => $request->due_date,
            'task_status' => $request->task_status,
		];

		upcoming_task::find($id)->update($data);

		return redirect()->route('proupcoming.index');
	}

    public function destroy($id)
    {
        $data = upcoming_task::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Upcoming list has been deleted.');
    }

    public function upcomingdash(Request $request)
    {
        $id = $request->session()->get('idUser');
        $dataupc = upcoming_task::where('id_user', $id)->get();
        return view('prodashboard', compact('dataupc'));
    }
}

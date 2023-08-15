<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\upcoming_task;
use App\Models\to_dos;
use App\Models\weekly;
use App\Models\notes;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');

        //upcoming task
        $upcomingdone = upcoming_task::where('id_user', $id)->where('task_status', 'Done')->get();
        $upcoming = upcoming_task::where('id_user', $id)->get();
        $cupcomingdone = $upcomingdone->count();
        $cupcoming = $upcoming->count();
        if ($cupcoming == 0) {
            $pupcoming = 0;
        } else {
            $pupcoming = $cupcomingdone/$cupcoming * 100;
        }

        //todos
        $todosdone = to_dos::where('id_user', $id)->where('task_status', 'Done')->get();
        $todos = to_dos::where('id_user', $id)->get();
        $ctodosdone = $todosdone->count();
        $ctodos = $todos->count();
        if ($ctodos == 0) {
            $ptodos = 0;
        } else {
            $ptodos = $ctodosdone/$ctodos * 100;
        }
        
        //weekly
        $dayOfWeek = date('l');
        $dweekly = weekly::where('id_user', $id)->where('task_day', $dayOfWeek)->get();
        $cweekly = $dweekly->count();

        //notes
        $dnotes = notes::where('id_user', $id)->get();
        $cnotes = $dnotes->count();

        return view('prodashboard', compact('upcoming','cupcomingdone','cupcoming',
        'pupcoming','ctodosdone','ctodos','ptodos','cweekly','cnotes'));
    }

}

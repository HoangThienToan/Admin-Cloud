<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\File;
use App\Models\User;

class FillesTableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('files_table.index');
    }

    public function loadData(Request $request)
    {   
        if ($request->ajax()) {
            $user = $request->user();
            if($user->type === 'admin') {
                $data = User::all();
                $dataTable =  DataTables::of($data)->make(true);
            } else {
                $data = File::all();
                $dataTable =  DataTables::of($data)->make(true);
            }
            return response()->json([
                'dataTable' => $dataTable,
                'type' => $user->type,
                'view' => view('table.table', compact('data'))->render(),
            ]);
        }
        return abort(404);
    }
}

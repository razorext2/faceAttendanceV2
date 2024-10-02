<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use Illuminate\Http\Request;

class LoghistoryController extends Controller
{

    public function index()
    {
        $log = LogHistory::get()->sortByDesc('created_at');
        return view('dashboard.log.index', compact('log'));
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use Illuminate\Http\Request;

class LoghistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $log = LogHistory::get();
        return view('dashboard.log.index', compact('log'));
        //
    }
}

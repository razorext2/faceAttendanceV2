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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LogHistory $logHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogHistory $logHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LogHistory $logHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogHistory $logHistory)
    {
        //
    }
}

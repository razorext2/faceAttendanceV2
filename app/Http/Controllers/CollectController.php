<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use Illuminate\Http\Request;

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('dashboard.collect.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.collect.add');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collector $collect)
    {
        return view('dashboard.collect.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collector $collect)
    {
        return view('dashboard.collect.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collector $collect)
    {
        //
    }
}

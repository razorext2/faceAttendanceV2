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
    public function show(Collector $collect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collector $collect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collector $collect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collector $collect)
    {
        //
    }
}

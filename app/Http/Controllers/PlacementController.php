<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.placement.index');
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
    public function show(Placement $placement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Placement $placement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Placement $placement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Placement $placement)
    {
        //
    }
}

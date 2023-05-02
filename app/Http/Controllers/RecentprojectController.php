<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recentproject;

class RecentprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataRecentproject = Recentproject::all();
        return view('layouts.recentproject', compact('dataRecentproject'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ids = Recentproject::findorfail($id);
        return view('layouts.edit-recentproject', compact('ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ids = Recentproject::findorfail($id);
        $ids->update($request->all());

        return redirect('recentproject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

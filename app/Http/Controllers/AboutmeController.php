<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutme;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAboutme = Aboutme::all();
        return view('layouts.aboutme', compact('dataAboutme'));
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
        $ids = Aboutme::findorfail($id);
        return view('layouts.edit-aboutme', compact('ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ids = Aboutme::findorfail($id);
        $ids->update($request->all());

        return redirect('aboutme');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

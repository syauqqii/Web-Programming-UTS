<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otherproject;

class OtherprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataOtherproject = Otherproject::all();
        return view('layouts.otherproject', compact('dataOtherproject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.create-otherproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Otherproject::create([
            'judul' => $request->judul,
            'link' => $request->link,
            'konten' => $request->konten,
        ]);

        return redirect('project');
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
        $ids = Otherproject::findorfail($id);
        return view('layouts.edit-otherproject', compact('ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ids = Otherproject::findorfail($id);
        $ids->update($request->all());

        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ids = Otherproject::findorfail($id);
        $ids->delete();

        return back();
    }
}

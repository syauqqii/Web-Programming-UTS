<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homepage;
use App\Models\aboutme;
use App\Models\contact;
use App\Models\skill_framework;
use App\Models\skill_language;
use App\Models\skill_tools;
use App\Models\Otherproject;
use App\Models\recentproject;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataHome = Homepage::all();
        $dataAboutme = Aboutme::all();
        $dataContact = Contact::all();
        $dataFramework = Skill_framework::all();
        $dataLanguage = Skill_language::all();
        $dataTools = Skill_tools::all();
        $dataOtherproject = Otherproject::all();
        $dataRecentproject = Recentproject::all();
        return view('index', compact('dataHome', 'dataAboutme', 'dataContact', 'dataFramework', 'dataLanguage', 'dataTools', 'dataOtherproject', 'dataRecentproject'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

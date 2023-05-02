<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill_framework;
use App\Models\skill_language;
use App\Models\skill_tools;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFramework = Skill_framework::all();
        $dataLanguage = Skill_language::all();
        $dataTools = Skill_tools::all();
        return view('layouts.skill', compact('dataFramework', 'dataLanguage', 'dataTools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createFramework()
    {
        return view('layouts.create-framework');
    }

    public function createLanguage()
    {
        return view('layouts.create-language');
    }

    public function createTool()
    {
        return view('layouts.create-tool');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFramework(Request $request)
    {
         Skill_framework::create([
            'skill_frameworks' => $request->skill_frameworks,
        ]);

        return redirect('skill');
    }

    public function storeLanguage(Request $request)
    {
         Skill_language::create([
            'skill_languages' => $request->skill_languages,
        ]);

        return redirect('skill');
    }

    public function storeTool(Request $request)
    {
         Skill_tools::create([
            'skill_tools' => $request->skill_tools,
        ]);

        return redirect('skill');
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
    public function editFramework(string $id)
    {
        $ids = Skill_framework::findorfail($id);
        return view('layouts.edit-framework', compact('ids'));
    }

    public function editLanguage(string $id)
    {
        $ids = Skill_language::findorfail($id);
        return view('layouts.edit-language', compact('ids'));
    }

    public function editTool(string $id)
    {
        $ids = Skill_tools::findorfail($id);
        return view('layouts.edit-tool', compact('ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateFramework(Request $request, string $id)
    {
        $ids = Skill_framework::findorfail($id);
        $ids->update($request->all());

        return redirect('skill');
    }

    public function updateLanguage(Request $request, string $id)
    {
        $ids = Skill_language::findorfail($id);
        $ids->update($request->all());

        return redirect('skill');
    }

    public function updateTool(Request $request, string $id)
    {
        $ids = Skill_tools::findorfail($id);
        $ids->update($request->all());

        return redirect('skill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyFramework(string $id)
    {
        $ids = Skill_framework::findorfail($id);
        $ids->delete();

        return back();
    }

    public function destroyLanguage(string $id)
    {
        $ids = Skill_language::findorfail($id);
        $ids->delete();

        return back();
    }

    public function destroyTool(string $id)
    {
        $ids = Skill_tools::findorfail($id);
        $ids->delete();

        return back();
    }
}

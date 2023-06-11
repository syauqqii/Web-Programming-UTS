<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Category;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSkill = Skill::all();
        return view('layouts.skill', compact('dataSkill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createSkill(){
        $categories = Category::all();
        return view('layouts.create-skill', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSkill(Request $request)
    {
         Skill::create([
            'name' => $request->name,
            'category_id' => $request->category,
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
    public function editSkill(string $id)
    {
        $ids = Skill::findorfail($id);
        $categories = Category::all();
        return view('layouts.edit-skill', compact('ids', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateSkill(Request $request, string $id)
    {
        $ids = Skill::findorfail($id);
        $ids->update($request->all());

        return redirect('skill');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroySkill(string $id)
    {
        $ids = Skill::findorfail($id);
        $ids->delete();

        return back();
    }
}

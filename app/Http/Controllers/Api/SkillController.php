<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Http\Requests\skillupdate;
use App\Http\Requests\skilldelete;
use App\Http\Requests\skilladd;

class SkillController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Skill::all();
        return response()->json($data);
    }

    public function add(skilladd $request)
    {
        $data = new Skill();
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->save();

        return response()->json(['message' => 'add skill success', 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(skillupdate $request, string $id)
    {
        $data = Skill::findOrFail($id);

        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->save();
        
        return response()->json($data);
    }

    public function destroy(skilldelete $request, string $id)
    {
        $data = Skill::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'delete otherproject success']);
    }
}
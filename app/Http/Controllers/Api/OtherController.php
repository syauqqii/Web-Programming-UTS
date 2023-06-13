<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otherproject;
use App\Http\Requests\otherprojectupdate;
use App\Http\Requests\otherprojectdelete;
use App\Http\Requests\otherprojectadd;

class OtherController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Otherproject::all();
        return response()->json($data);
    }

    public function add(otherprojectadd $request)
    {
        $data = new Otherproject();
        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->link = $request->link;
        $data->save();

        return response()->json(['message' => 'add otherproject success', 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(otherprojectupdate $request, string $id)
    {
        $data = Otherproject::findOrFail($id);

        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->link = $request->link;
        $data->save();

        return response()->json($data);
    }

    public function destroy(otherprojectdelete $request, string $id)
    {
        $data = Otherproject::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'delete otherproject success']);
    }
}

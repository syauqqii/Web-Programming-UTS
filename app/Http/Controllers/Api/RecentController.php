<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\recentproject;
use App\Http\Requests\recentupdate;

class RecentController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = recentproject::all();
        return response()->json($data);
    }

    public function edit(recentupdate $request, string $id)
    {
        $data = recentproject::findOrFail($id);

        $data->path_foto = $request->path_foto;
        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->link = $request->link;
        $data->save();

        return response()->json($data);
    }
}

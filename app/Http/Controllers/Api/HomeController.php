<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepage;
use App\Http\Requests\homeupdate;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = homepage::all();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(homeupdate $request, string $id)
    {
        $data = homepage::findOrFail($id);

        $data->nama = $request->nama;
        $data->konten = $request->konten;
        $data->email = $request->email;
        $data->save();

        return response()->json($data);
    }
}
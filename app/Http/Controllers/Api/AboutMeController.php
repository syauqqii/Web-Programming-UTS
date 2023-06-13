<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutme;
use App\Http\Requests\aboutmeupdate;

class AboutMeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = aboutme::all();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(aboutmeupdate $request, string $id)
    {
        $data = aboutme::findOrFail($id);

        $data->konten = $request->konten;
        $data->link = $request->link;
        $data->save();

        return response()->json($data);
    }
}

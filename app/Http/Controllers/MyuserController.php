<?php

namespace App\Http\Controllers;

use App\Models\Myuser;
use Illuminate\Http\Request;

class MyuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Myuser::create($request->all());

        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Myuser  $myuser
     * @return \Illuminate\Http\Response
     */
    public function show(Myuser $myuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Myuser  $myuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Myuser $myuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Myuser  $myuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myuser $myuser)
    {
        //
    }
}

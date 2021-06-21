<?php

namespace App\Http\Controllers;

use App\Models\UserGood;
use Illuminate\Http\Request;

class UserGoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = UserGood::all(); //全件取得

        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = UserGood::create($request->all());

        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGood  $userGood
     * @return \Illuminate\Http\Response
     */
    public function show(UserGood $userGood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserGood  $userGood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGood $userGood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGood  $userGood
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = UserGood::where('post_id', $id)->delete();

        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}

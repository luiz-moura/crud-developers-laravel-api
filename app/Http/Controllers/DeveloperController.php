<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeveloperResource;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developers = Developer::paginate(20);

        return new DeveloperResource($developers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $developer = Developer::create($request->only(['first_name', 'last_name', 'cpf', 'birth_date', 'gender', 'phone', 'email']));

        return new DeveloperResource($developer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        return new DeveloperResource($developer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {
        $developer->update($request->only(['first_name', 'last_name', 'cpf', 'birth_date', 'gender', 'phone', 'email']));

        return new DeveloperResource($developer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();

        return response()->json(null, 204);
    }
}

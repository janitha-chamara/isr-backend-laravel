<?php

namespace App\Http\Controllers;

use App\Models\LookUp;
use App\Http\Requests\StoreLookUpRequest;
use App\Http\Requests\UpdateLookUpRequest;

class LookUpController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLookUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLookUpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function show(LookUp $lookUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function edit(LookUp $lookUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLookUpRequest  $request
     * @param  \App\Models\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLookUpRequest $request, LookUp $lookUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(LookUp $lookUp)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use App\Http\Requests\StoreBusinessUnitRequest;
use App\Http\Requests\UpdateBusinessUnitRequest;

class BusinessUnitController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessUnitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessUnit  $businessUnit
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessUnit $businessUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessUnit  $businessUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessUnit $businessUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessUnitRequest  $request
     * @param  \App\Models\BusinessUnit  $businessUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessUnitRequest $request, BusinessUnit $businessUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessUnit  $businessUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessUnit $businessUnit)
    {
        //
    }
}

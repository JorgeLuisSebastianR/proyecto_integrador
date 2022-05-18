<?php

namespace App\Http\Controllers;

use App\Models\Campinteria;
use App\Http\Requests\StoreCampinteriaRequest;
use App\Http\Requests\UpdateCampinteriaRequest;

class CampinteriaController extends Controller
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
     * @param  \App\Http\Requests\StoreCampinteriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampinteriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campinteria  $campinteria
     * @return \Illuminate\Http\Response
     */
    public function show(Campinteria $campinteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campinteria  $campinteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Campinteria $campinteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampinteriaRequest  $request
     * @param  \App\Models\Campinteria  $campinteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampinteriaRequest $request, Campinteria $campinteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campinteria  $campinteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campinteria $campinteria)
    {
        //
    }
}

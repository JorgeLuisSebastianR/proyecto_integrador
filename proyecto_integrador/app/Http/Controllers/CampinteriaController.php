<?php

namespace App\Http\Controllers;

use App\Models\Campinteria;
use App\Http\Requests\StoreCampinteriaRequest;
use App\Http\Requests\UpdateCampinteriaRequest;
class CampinteriaController extends Controller
{
    public function index()
    {
      $campinterias = campinteria::all();
        return view('campinterias.index', compact('campinterias'));
    }

    public function create()
    {
        //
    }

    public function store(StoreCampinteriaRequest $request)
    {
        //
    }

    public function show(Campinteria $campinteria)
    {
        //
    }

    public function edit(Campinteria $campinteria)
    {
        //
    }

    public function update(UpdateCampinteriaRequest $request, Campinteria $campinteria)
    {
        //
    }

    public function destroy(Campinteria $campinteria)
    {
        //
    }
}

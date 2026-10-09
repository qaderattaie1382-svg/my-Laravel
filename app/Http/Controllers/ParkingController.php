<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {
        return view('parkings.index');
    }

    public function create()
    {
        return view('parkings.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('parkings.show', compact('id'));
    }

    public function edit(string $id)
    {
        return view('parkings.edit', compact('id'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
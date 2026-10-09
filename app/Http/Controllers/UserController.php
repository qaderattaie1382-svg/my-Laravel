<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()                          { return view('users.index'); }
    public function create()                         { return view('users.create'); }
    public function store(Request $request)          { }
    public function show(string $id)                 { return view('users.show', compact('id')); }
    public function edit(string $id)                 { return view('users.edit', compact('id')); }
    public function update(Request $request, string $id) { }
    public function destroy(string $id)              { }
}
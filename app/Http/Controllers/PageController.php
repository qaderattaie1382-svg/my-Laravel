<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()    { return view('index'); }
    public function about()    { return view('about'); }
    public function contact()  { return view('contact'); }
    public function features() { return view('features'); }
    public function pricing()  { return view('pricing'); }
    public function signup()   { return view('signup'); }
    public function login()    { return view('auth.login'); }
    public function profile()  { return view('profile'); }
    public function zones()    { return view('zones'); }
}
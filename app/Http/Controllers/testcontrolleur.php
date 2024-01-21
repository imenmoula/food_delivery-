<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontrolleur extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }

    public function food()
    {
        return view('test.food');
    }

    public function bar(){
        return view('test.bar');

    }
}

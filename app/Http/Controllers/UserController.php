<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function add()
    {
        return view('add');
    }
}

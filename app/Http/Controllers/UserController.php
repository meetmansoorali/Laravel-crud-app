<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class UserController extends Controller
{
    public function show()
    {
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }
    public function add()
    {
        return view('add');
    }
    public function update()
    {
        $tasks = Task::all()->where('id');
        return view('update', compact('tasks'));
    }
}

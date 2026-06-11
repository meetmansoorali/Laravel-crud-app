<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $tasks = Task::all();

        return view('welcome', compact('tasks'));
    }

    public function add(Request $request) {
        $tasks = new Task;
        $tasks->name = $request->name;
        $tasks->city = $request->city;
        $tasks->save();
        return redirect('/');
    }

    public function showaddpage()
    {

        return view('add');
    }

    public function update()
    {
        $tasks = Task::all()->where('id');

        return view('update', compact('tasks'));
    }
}

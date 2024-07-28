<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    function doSomething()
    {
       Task::insert(
        [
            'title'=>fake()->sentence(10),
            'description'=>fake()->sentence(30),
            'due_date'=>now()->addDays(rand(1,7))
        ],
        [
            'title'=>fake()->sentence(10),
            'description'=>fake()->sentence(30),
            'due_date'=>now()->addDays(rand(1,7))
        ]
        );
        return "done";
    }
    function index(){
        // return Task::where('status','completed')->get();
        // return Task::whereStatus('completed')->get();
        // return Task::whereStatus('completed')->count();
        // return Task::find(9);
        // return Task::orderBy('id','desc')->get();
        // Task::find('2')->update(['status','completed']);
        // return 'done';
        return Task::all();


    }
    // function show(Request $request,$id){
    //     return Task::find($id);
    // }

    function show(Request $request,Task $task){
        return $task;
    }
}

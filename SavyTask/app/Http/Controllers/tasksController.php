<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    
    public function show()
    {
        $task = Task::find();
         
        return view('tasks.show',[
            'task'=>$task
        ]);
}


}

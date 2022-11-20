<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(){
        $tarefas = Task::all();
        return view('index', ['tarefas' => $tarefas]);
    }

    public function create(){
        return view('cadastrar');
    }    
    
}

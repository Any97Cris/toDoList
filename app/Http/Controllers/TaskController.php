<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(){
        
        $search = request('search');
        if($search){
            $tarefas = Task::where([
                ['name', 'like', '%'.$search.'%']
                ])->get();
        }else{
            $tarefas = Task::all();
        }

        return view('index', ['tarefas' => $tarefas, 'search' => $search]);
    }

    public function create(){
        return view('cadastrar');
    }    

    public function store(Request $request) {
        $tarefa = new Task;

        $tarefa->name = $request->name;
        $tarefa->description = $request->description;

        $tarefa->save();

        return redirect('/');
    }

    public function edit($id) {

        $tarefa = Task::findOrFail($id);

        return view('editar', ['tarefa' => $tarefa]);
    }

    public function upload(Request $request,$id) {
        $tarefa = Task::findOrFail($id);

        $tarefa->name = $request->name;
        $tarefa->description = $request->description;

        $tarefa->save();
        return redirect('/');
    }

    public function delete($id){
        $tarefa = Task::findOrFail($id);

        return redirect('/', ['tarefa' => $tarefa]);
    }

    public function destroy($id){
        $tarefa = Task::findOrFail($id);
        $tarefa->delete();

        return redirect('/');
    }
    
}

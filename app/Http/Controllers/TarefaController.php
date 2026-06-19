<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public function index()
    {
        $tarefas=Tarefa::all();

        return view(
            'tarefas.index',
            compact('tarefas')
        );
    }

    public function add(Request $request)
    {

        Tarefa::create([

            'nome'=>$request->nome

        ]);

        return back();

    }


    public function concluir($id)
    {

        $tarefa=Tarefa::find($id);

        $tarefa->concluida=true;

        $tarefa->save();

        return back();

    }

}
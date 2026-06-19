<?php

namespace App\Http\Controllers;

use App\Models\Comunidade;
use Illuminate\Http\Request;

class ComunidadeController extends Controller
{

public function index()
{

$posts=Comunidade::all();

return view(
'comunidade.index',
compact('posts')
);

}


public function add(Request $request)
{

Comunidade::create([

'usuario'=>$request->usuario,

'mensagem'=>$request->mensagem

]);

return back();

}


public function remove($id)
{

$post=Comunidade::find($id);

$post->delete();

return back();

}


public function edit(Request $request,$id)
{

$post=Comunidade::find($id);

$post->mensagem=
$request->mensagem;

$post->save();

return back();

}

}
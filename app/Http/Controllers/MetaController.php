<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{

    public function index()
    {
        $metas = Meta::all();

        return view(
            'metas.index',
            compact('metas')
        );
    }


    public function add(Request $request)
    {

        Meta::create([

            'titulo'=>$request->titulo,
            'progresso'=>$request->progresso

        ]);

        return back();

    }


    public function edit(Request $request,$id)
    {

        $meta=Meta::find($id);

        $meta->titulo=$request->titulo;
        $meta->progresso=$request->progresso;

        $meta->save();

        return back();

    }


    public function remove($id)
    {

        $meta=Meta::find($id);

        $meta->delete();

        return back();

    }

}
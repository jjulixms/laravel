<?php

namespace App\Http\Controllers;

class PerfilController extends Controller
{
    private $perfil=[

        "nome"=>"Marina Oliveira Costa",

        "cargo"=>"Desenvolvedora Full Stack",

        "cidade"=>"Curitiba - PR",

        "descricao"=>"Engenheira de Software apaixonada por tecnologia."

    ];


    public function index()
    {

        $perfil=$this->perfil;

        return view(
            'perfil.index',
            compact('perfil')
        );

    }


    public function edit(Request $request)
    {

        return back();

    }

}
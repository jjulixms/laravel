@extends('layouts.app')

@section('conteudo')

<h1>Comunidade</h1>

<form
method="POST"
action="{{route('comunidade.add')}}">

@csrf

<input
name="usuario"
placeholder="Nome">

<textarea
name="mensagem"
placeholder="Escreva algo"></textarea>

<button>

Publicar

</button>

</form>


@foreach($posts as $post)

<div class="card">

<h3>

{{$post->usuario}}

</h3>

<p>

{{$post->mensagem}}

</p>


<form
method="POST"
action="{{route('comunidade.edit',$post->id)}}">

@csrf

<input
name="mensagem"
placeholder="Editar post">

<button>

Editar

</button>

</form>


<form
method="POST"
action="{{route('comunidade.remove',$post->id)}}">

@csrf

<button>

Excluir

</button>

</form>

</div>

@endforeach

@endsection
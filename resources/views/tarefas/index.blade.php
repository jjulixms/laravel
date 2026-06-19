@extends('layouts.app')

@section('conteudo')

<h1>Tarefas</h1>

<form method="POST"
action="{{route('tarefas.add')}}">

@csrf

<input
name="nome"
placeholder="Nova tarefa">

<button>

Adicionar

</button>

</form>


<div class="box">

@foreach($tarefas as $tarefa)

<div class="card">

@if($tarefa->concluida)

<s>

{{$tarefa->nome}}

</s>

<p>✔ Concluída</p>

@else

{{$tarefa->nome}}

<form method="POST"
action="{{route('tarefas.concluir',$tarefa->id)}}">

@csrf

<button>

Concluir

</button>

</form>

@endif

</div>

@endforeach

</div>

@endsection
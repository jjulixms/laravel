@extends('layouts.app')

@section('conteudo')

<div class="tarefa-container">

<div class="tarefa-topo">

<h1>Gerenciamento de Tarefas</h1>

<button
class="btn-tarefa"
onclick="abrirModal()">

Nova Tarefa

</button>

</div>



<div class="tarefa-resumo">

<div class="tarefa-card">

<h2>

{{count($tarefas)}}

</h2>

<p>

Total

</p>

</div>


<div class="tarefa-card">

<h2>

{{$tarefas->where('concluida',false)->count()}}

</h2>

<p>

Pendentes

</p>

</div>


<div class="tarefa-card">

<h2>

{{$tarefas->where('concluida',true)->count()}}

</h2>

<p>

Concluídas

</p>

</div>


<div class="tarefa-card">

<h2>

{{count($tarefas)>0
? round(($tarefas->where('concluida',true)->count()/count($tarefas))*100)
:0}}%

</h2>

<p>

Produtividade

</p>

</div>

</div>



<h2>Tarefas</h2>

<div class="lista-tarefas">

@foreach($tarefas as $tarefa)

<div class="tarefa-item">

<div>

@if($tarefa->concluida)

<h3>

<s>

{{$tarefa->nome}}

</s>

</h3>

<span class="status-concluido">

✔ Concluída

</span>

@else

<h3>

{{$tarefa->nome}}

</h3>

<span class="status-pendente">

⏳ Pendente

</span>

@endif

</div>



<div class="acoes-tarefa">

@if(!$tarefa->concluida)

<form
method="POST"
action="{{route('tarefas.concluir',$tarefa->id)}}">

@csrf

<button>

Concluir

</button>

</form>

@endif


<form
method="POST"
action="{{route('tarefas.remove',$tarefa->id)}}">

@csrf

<button class="btn-excluir">

Excluir

</button>

</form>

</div>

</div>

@endforeach

</div>

</div>



<div
id="modalTarefa"
class="modal">

<div class="modal-conteudo">

<h2>

Nova Tarefa

</h2>


<form
method="POST"
action="{{route('tarefas.add')}}">

@csrf

<input
name="nome"
placeholder="Digite a tarefa"
required>


<button>

Salvar

</button>


<button
type="button"
onclick="fecharModal()">

Cancelar

</button>

</form>

</div>

</div>



<script>

function abrirModal(){

document.getElementById(
'modalTarefa'
).style.display='flex';

}

function fecharModal(){

document.getElementById(
'modalTarefa'
).style.display='none';

}

</script>

@endsection
@extends('layouts.app')

@section('conteudo')

<div class="meta-container">

    <div class="meta-header">

        <h1>Minhas Metas</h1>

        <button
        class="btn-meta"
        onclick="abrirModal()">

        Nova Meta

        </button>

    </div>


    <div class="meta-resumo">

        <div class="meta-card">

            <h3>Total de Metas</h3>

            <span>

                {{count($metas)}}

            </span>

        </div>

        <div class="meta-card">

            <h3>Metas Concluídas</h3>

            <span>

                {{$metas->where('progresso',100)->count()}}

            </span>

        </div>

        <div class="meta-card">

            <h3>Progresso Médio</h3>

            <span>

                {{$metas->avg('progresso') ?? 0}}%

            </span>

        </div>

    </div>



<div class="metas-grid">

@foreach($metas as $meta)

<div class="meta-item prioridade-media">

<h2>

{{$meta->titulo}}

</h2>

<p>

Progresso: {{$meta->progresso}}%

</p>


<div class="progress">

<div
class="progress-bar"
style="width:{{$meta->progresso}}%">
</div>

</div>



<form
method="POST"
action="{{route('metas.edit',$meta->id)}}">

@csrf

<input
type="text"
name="titulo"
value="{{$meta->titulo}}">

<input
type="number"
name="progresso"
value="{{$meta->progresso}}">

<button>

Salvar Alterações

</button>

</form>


<form
method="POST"
action="{{route('metas.remove',$meta->id)}}">

@csrf

<button
class="btn-excluir">

Excluir

</button>

</form>

</div>

@endforeach

</div>

</div>



<div
id="modalMeta"
class="modal">

<div class="modal-conteudo">

<h2>

Adicionar Meta

</h2>


<form
method="POST"
action="{{route('metas.add')}}">

@csrf


<input
type="text"
name="titulo"
placeholder="Título da meta"
required>


<input
type="number"
name="progresso"
placeholder="Progresso (%)"
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
'modalMeta'
).style.display='flex';

}


function fecharModal(){

document.getElementById(
'modalMeta'
).style.display='none';

}

</script>

@endsection 
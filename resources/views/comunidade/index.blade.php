@extends('layouts.app')

@section('conteudo')

<div class="comunidade-container">

<div class="comunidade-topo">

<h1>Comunidade DevLife</h1>

<p>
Conecte-se com desenvolvedores, compartilhe experiências e aprenda.
</p>

</div>


<div class="comunidade-resumo">

<div class="com-card">

<h2>1.248</h2>

<p>Desenvolvedores</p>

</div>

<div class="com-card">

<h2>365</h2>

<p>Posts publicados</p>

</div>

<div class="com-card">

<h2>89</h2>

<p>Discussões ativas</p>

</div>

</div>


<div class="com-grid">


<div class="feed">

<div class="novo-post">

<h2>Criar publicação</h2>

<form method="POST"
action="{{route('comunidade.add')}}">

@csrf

<input
type="text"
name="usuario"
placeholder="Seu nome">

<textarea
name="mensagem"
placeholder="Compartilhe algo com a comunidade...">
</textarea>

<button>

Publicar

</button>

</form>

</div>



@foreach($posts as $post)

<div class="post-card">

<div class="post-topo">

<div>

<h3>

{{$post->usuario}}

</h3>

<span>

Desenvolvedor Full Stack

</span>

</div>

</div>


<p class="mensagem">

{{$post->mensagem}}

</p>


<div class="tags">

<span>#Laravel</span>

<span>#Programação</span>

<span>#DevLife</span>

</div>


<div class="acoes">

<button>

👍 Curtir

</button>


<button
onclick="mostrarEditar({{$post->id}})">

✏ Editar

</button>


<form
method="POST"
action="{{route('comunidade.remove',$post->id)}}">

@csrf

<button class="btn-excluir">

🗑 Excluir

</button>

</form>

</div>


<div
id="editar{{$post->id}}"
style="display:none">

<form
method="POST"
action="{{route('comunidade.edit',$post->id)}}">

@csrf

<input
name="mensagem"
value="{{$post->mensagem}}">

<button>

Salvar

</button>

</form>

</div>

</div>

@endforeach

</div>




<div class="sidebar-comunidade">

<div class="lado-card">

<h2>Comunidades em alta</h2>

<ul>

<li>💻 Front-End Brasil</li>

<li>🚀 IA Developers</li>

<li>⚙ Back-End Experts</li>

<li>📱 Mobile Community</li>

</ul>

</div>


<div class="lado-card">

<h2>Pessoas em destaque</h2>

<div class="usuario">

👩 Ana Silva

</div>

<div class="usuario">

👨 Lucas Costa

</div>

<div class="usuario">

👩 Mariana Souza

</div>

</div>

</div>

</div>

</div>


<script>

function mostrarEditar(id){

let campo=
document.getElementById(
'editar'+id
);

if(campo.style.display=="none")
{

campo.style.display="block";

}
else{

campo.style.display="none";

}

}

</script>

@endsection
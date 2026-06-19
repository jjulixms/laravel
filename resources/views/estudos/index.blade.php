@extends('layouts.app')

@section('conteudo')

<div class="estudo-container">

<div class="estudo-topo">

<h1>Área de Estudos</h1>

<button
class="btn-estudo"
onclick="abrirModal()">

Novo Estudo

</button>

</div>


<input
class="pesquisa"
placeholder="Pesquisar tecnologia, curso ou artigo...">


<div class="cards-estudo">

<div class="card-estudo">

<h3>Cursos Ativos</h3>

<span id="totalCursos">2</span>

</div>

<div class="card-estudo">

<h3>Horas estudadas</h3>

<span>36h</span>

</div>

<div class="card-estudo">

<h3>Meta semanal</h3>

<span>82%</span>

</div>

</div>



<h2>Tecnologias estudadas</h2>

<div class="tecnologias">

<div class="tec">

<p>JavaScript</p>

<div class="barra">
<div class="progresso" style="width:90%"></div>
</div>

</div>


<div class="tec">

<p>React</p>

<div class="barra">
<div class="progresso" style="width:75%"></div>
</div>

</div>


<div class="tec">

<p>Python</p>

<div class="barra">
<div class="progresso" style="width:80%"></div>
</div>

</div>


<div class="tec">

<p>SQL</p>

<div class="barra">
<div class="progresso" style="width:60%"></div>
</div>

</div>

</div>



<h2>Cursos e Conteúdos</h2>

<div id="listaCursos">


<div class="curso">

<h3 id="titulo1">

React Completo

</h3>

<p id="descricao1">

Curso focado em componentes, hooks e APIs.

</p>

<span id="porcentagem1">

65% concluído

</span>

<div class="barra">

<div
class="progresso"
id="barra1"
style="width:65%">
</div>

</div>

<div class="acoes-estudo">

<button
onclick="editarCurso(1)">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirCurso(this)">

Excluir

</button>

</div>

</div>



<div class="curso">

<h3 id="titulo2">

Node.js API

</h3>

<p id="descricao2">

Desenvolvimento de APIs modernas.

</p>

<span id="porcentagem2">

40% concluído

</span>

<div class="barra">

<div
class="progresso"
id="barra2"
style="width:40%">
</div>

</div>

<div class="acoes-estudo">

<button
onclick="editarCurso(2)">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirCurso(this)">

Excluir

</button>

</div>

</div>

</div>



<h2>Artigos Recomendados</h2>

<div class="artigos">

<div class="artigo">

<h3>Inteligência Artificial em 2026</h3>

<p>

Novas tendências e tecnologias

</p>

</div>


<div class="artigo">

<h3>Boas práticas em React</h3>

<p>

Melhore performance e organização

</p>

</div>

</div>

</div>




<div
id="modalEstudo"
class="modal">

<div class="modal-conteudo">

<h2>Novo Curso</h2>

<input
id="titulo"
placeholder="Nome">

<textarea
id="descricao"
placeholder="Descrição"></textarea>

<input
id="porcentagem"
type="number"
placeholder="Progresso (%)">


<button
onclick="adicionarCurso()">

Salvar

</button>


<button
onclick="fecharModal()">

Cancelar

</button>

</div>

</div>




<div
id="modalEditar"
class="modal">

<div class="modal-conteudo">

<h2>Editar Curso</h2>

<input id="novoTitulo">

<textarea id="novaDescricao"></textarea>

<input
id="novaPorcentagem"
type="number">


<button
onclick="salvarEdicao()">

Salvar

</button>


<button
onclick="fecharEditar()">

Cancelar

</button>

</div>

</div>




<script>

let contador=2;
let cursoAtual;



function abrirModal(){

document.getElementById(
'modalEstudo'
).style.display='flex';

}


function fecharModal(){

document.getElementById(
'modalEstudo'
).style.display='none';

}



function adicionarCurso(){

contador++;

let titulo=
document.getElementById(
'titulo'
).value;


let descricao=
document.getElementById(
'descricao'
).value;


let porcentagem=
document.getElementById(
'porcentagem'
).value;



let novo=`

<div class="curso">

<h3 id="titulo${contador}">

${titulo}

</h3>

<p id="descricao${contador}">

${descricao}

</p>

<span id="porcentagem${contador}">

${porcentagem}% concluído

</span>


<div class="barra">

<div
class="progresso"
id="barra${contador}"
style="width:${porcentagem}%">
</div>

</div>


<div class="acoes-estudo">

<button
onclick="editarCurso(${contador})">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirCurso(this)">

Excluir

</button>

</div>

</div>

`;

document.getElementById(
'listaCursos'
).innerHTML += novo;


document.getElementById(
'totalCursos'
).innerText=contador;

fecharModal();

}



function editarCurso(id){

cursoAtual=id;

document.getElementById(
'modalEditar'
).style.display='flex';


document.getElementById(
'novoTitulo'
).value=
document.getElementById(
'titulo'+id
).innerText;


document.getElementById(
'novaDescricao'
).value=
document.getElementById(
'descricao'+id
).innerText;


let valor=
document.getElementById(
'porcentagem'+id
).innerText;

document.getElementById(
'novaPorcentagem'
).value=
parseInt(valor);

}



function salvarEdicao(){

let titulo=
document.getElementById(
'novoTitulo'
).value;

let descricao=
document.getElementById(
'novaDescricao'
).value;

let porcentagem=
document.getElementById(
'novaPorcentagem'
).value;



document.getElementById(
'titulo'+cursoAtual
).innerText=titulo;


document.getElementById(
'descricao'+cursoAtual
).innerText=descricao;


document.getElementById(
'porcentagem'+cursoAtual
).innerText=
porcentagem+'% concluído';


document.getElementById(
'barra'+cursoAtual
).style.width=
porcentagem+'%';


fecharEditar();

}



function fecharEditar(){

document.getElementById(
'modalEditar'
).style.display='none';

}



function excluirCurso(botao){

botao.closest(
'.curso'
).remove();

}

</script>

@endsection
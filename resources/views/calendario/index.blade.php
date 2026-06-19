@extends('layouts.app')

@section('conteudo')

<div class="calendario-container">

<div class="cal-topo">

<h1>Calendário e Agenda</h1>

<button
class="btn-calendario"
onclick="abrirModal()">

Novo Evento

</button>

</div>



<div class="cal-resumo">

<div class="cal-card">

<h2 id="eventosHoje">

2

</h2>

<p>

Eventos Hoje

</p>

</div>


<div class="cal-card">

<h2>

7

</h2>

<p>

Eventos Semanais

</p>

</div>


<div class="cal-card">

<h2>

82%

</h2>

<p>

Produtividade

</p>

</div>

</div>




<div class="cal-grid">


<div class="card">

<div id="calendar"></div>

</div>




<div class="eventos-lado">

<h2>

Próximos Eventos

</h2>


<div id="listaEventos">

<div class="evento-item">

<h3>

Daily Scrum

</h3>

<p>

22/06/2026

</p>


<div class="acoes-evento">

<button
onclick="editarEvento(this)">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirEvento(this)">

Excluir

</button>

</div>

</div>




<div class="evento-item">

<h3>

Entrega Projeto

</h3>

<p>

25/06/2026

</p>

<div class="acoes-evento">

<button
onclick="editarEvento(this)">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirEvento(this)">

Excluir

</button>

</div>

</div>

</div>

</div>

</div>

</div>




<div
id="modalEvento"
class="modal">

<div class="modal-conteudo">

<h2>

Novo Evento

</h2>


<input
id="tituloEvento"
placeholder="Título">


<input
id="dataEvento"
type="date">


<button
onclick="adicionarEvento()">

Salvar

</button>


<button
onclick="fecharModal()">

Cancelar

</button>

</div>

</div>




<script>

let eventos=[

{
title:'Daily Scrum',
start:'2026-06-22'
},

{
title:'Entrega Projeto',
start:'2026-06-25'
}

];



document.addEventListener(
'DOMContentLoaded',

function(){

window.calendar=

new FullCalendar.Calendar(

document.getElementById(
'calendar'
),

{

initialView:
'dayGridMonth',

height:650,

events:eventos

}

);

calendar.render();

});




function abrirModal(){

document.getElementById(
'modalEvento'
).style.display='flex';

}


function fecharModal(){

document.getElementById(
'modalEvento'
).style.display='none';

}



function adicionarEvento(){

let titulo=

document.getElementById(
'tituloEvento'
).value;


let data=

document.getElementById(
'dataEvento'
).value;


calendar.addEvent({

title:titulo,
start:data

});



let novo=`

<div class="evento-item">

<h3>

${titulo}

</h3>

<p>

${data}

</p>

<div class="acoes-evento">

<button
onclick="editarEvento(this)">

Editar

</button>

<button
class="btn-excluir"
onclick="excluirEvento(this)">

Excluir

</button>

</div>

</div>

`;



document.getElementById(
'listaEventos'
).innerHTML += novo;



let total=

document.querySelectorAll(
'.evento-item'
).length;


document.getElementById(
'eventosHoje'
).innerText=total;


fecharModal();

}



function excluirEvento(botao){

botao.closest(
'.evento-item'
).remove();

}



function editarEvento(botao){

let card=

botao.closest(
'.evento-item'
);

let novo=

prompt(

'Editar evento',

card.querySelector(
'h3'
).innerText

);

if(novo){

card.querySelector(
'h3'
).innerText=novo;

}

}

</script>

@endsection
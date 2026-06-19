@extends('layouts.app')

@section('conteudo')

<h1>Calendário</h1>

<div class="card">

<p>

09:00 Daily Scrum

</p>

<p>

14:00 Reunião Projeto

</p>

</div>

<div id="calendar"></div>


<script>

document.addEventListener(
'DOMContentLoaded',

function(){

let calendar=
new FullCalendar.Calendar(

document.getElementById(
'calendar'
),

{

initialView:
'dayGridMonth',

events:[

{

title:'Daily Scrum',

start:'2026-06-22'

},

{

title:'Entrega Projeto',

start:'2026-06-25'

}

]

}

);

calendar.render();

});

</script>

@endsection
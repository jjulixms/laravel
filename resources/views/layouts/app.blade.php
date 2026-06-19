<!DOCTYPE html>
<html>
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css">

<script
src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js">
</script>
<head>

<title>DevLife</title>

<link  rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<div class="navbar">

<h1>DevLife</h1>

<a href="/dashboard/index">Dashboard</a>

<a href="/tarefas/index">Tarefas</a>

<a href="/estudos/index">Estudos</a>

<a href="/calendario/index">Calendário</a>

<a href="/metas/index">Metas</a>

<a href="/comunidade/index">Comunidade</a>

<a href="/perfil/index">Perfil</a>

</div>


<div class="conteudo">

@yield('conteudo')

</div>

</body>

</html>
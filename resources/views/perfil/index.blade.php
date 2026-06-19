@extends('layouts.app')

@section('conteudo')

<h1>Meu Perfil</h1>

<div class="perfil-container">

    <div class="perfil-top">

        <div class="perfil-card">

            <img src="{{asset('img/marina.jpg')}}" class="foto">

            <h2>Marina Oliveira Costa</h2>

            <p class="cargo">
                Desenvolvedora Full Stack
            </p>

            <p class="cidade">
                📍 Curitiba - Paraná
            </p>

            <button onclick="abrirModal()">
    Editar Perfil
</button>

        </div>


        <div class="sobre-card">

            <h2>Sobre Marina</h2>

            <p>

                Marina Oliveira Costa tem 27 anos e é formada em Engenharia de Software.
                Atua como Desenvolvedora Full Stack em uma empresa de tecnologia,
                desenvolvendo sistemas, sites e aplicativos para facilitar o dia a dia
                das pessoas e empresas.

                Desde a adolescência possui interesse por tecnologia e programação.
                Atualmente trabalha com desenvolvimento moderno utilizando diversas
                ferramentas e linguagens.

            </p>

        </div>

    </div>



<div class="estatisticas">

<div class="card-perfil">

<h2>15</h2>

<p>Projetos Concluídos</p>

</div>


<div class="card-perfil">

<h2>8</h2>

<p>Cursos Realizados</p>

</div>


<div class="card-perfil">

<h2>93%</h2>

<p>Produtividade</p>

</div>


<div class="card-perfil">

<h2>4 anos</h2>

<p>Experiência</p>

</div>

</div>



<div class="baixo">


<div class="habilidades">

<h2>Habilidades Técnicas</h2>

<p>JavaScript</p>

<div class="barra">
<div style="width:95%" class="progresso"></div>
</div>


<p>Python</p>

<div class="barra">
<div style="width:85%" class="progresso"></div>
</div>


<p>HTML/CSS</p>

<div class="barra">
<div style="width:90%" class="progresso"></div>
</div>


<p>React</p>

<div class="barra">
<div style="width:80%" class="progresso"></div>
</div>


<p>Node.js</p>

<div class="barra">
<div style="width:75%" class="progresso"></div>
</div>


<p>Banco de Dados SQL</p>

<div class="barra">
<div style="width:80%" class="progresso"></div>
</div>

</div>



<div class="objetivos">

<h2>Objetivos Profissionais</h2>

<ul>

<li>✔ Tornar-se Tech Lead</li>

<li>✔ Trabalhar em empresas internacionais</li>

<li>✔ Criar seu próprio aplicativo</li>

<li>✔ Aprender Inteligência Artificial</li>

<li>✔ Inspirar mais mulheres na tecnologia</li>

</ul>


<h2>Aplicativos Favoritos</h2>

<div class="apps">

<span>GitHub</span>

<span>Spotify</span>

<span>Discord</span>

<span>Notion</span>

</div>


<h2>Rotina</h2>

<p>

🎵 Ouvir música enquanto programa

</p>

<p>

💻 Desenvolver novas funcionalidades

</p>

<p>

📚 Estudar novas tecnologias

</p>

<p>

🎮 Jogar online

</p>

<p>

📺 Assistir séries

</p>

</div>

</div>

</div>
<div id="modalPerfil" class="modal">

<div class="modal-conteudo">

<h2>Editar Perfil</h2>

<form>

<input
type="text"
id="nome"
placeholder="Nome"
value="Marina Oliveira Costa">

<input
type="text"
id="cargo"
placeholder="Profissão"
value="Desenvolvedora Full Stack">

<input
type="text"
id="cidade"
placeholder="Cidade"
value="Curitiba - Paraná">

<textarea
id="sobre">

Marina Oliveira Costa tem 27 anos e é formada em Engenharia de Software.

</textarea>

<button
type="button"
onclick="salvarPerfil()">

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
"modalPerfil"
).style.display="flex";

}


function fecharModal(){

document.getElementById(
"modalPerfil"
).style.display="none";

}


function salvarPerfil(){

document.querySelector(
".perfil-card h2"
).innerText=
document.getElementById(
"nome"
).value;


document.querySelector(
".cargo"
).innerText=
document.getElementById(
"cargo"
).value;


document.querySelector(
".cidade"
).innerText=
"📍 "+
document.getElementById(
"cidade"
).value;


document.querySelector(
".sobre-card p"
).innerText=
document.getElementById(
"sobre"
).value;


fecharModal();

}

</script>
@endsection
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-language" content="pt-br, en-us">
	<meta name="author" content="Fábio de Almeida Martins">
	<meta name="copyright" content="© 2020  -  Fábio de Almeida Martins">
	<meta name="reply-to" content="fabio.martins.01@hotmail.com">
	<meta name="description" content="">
	<meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo Laravel + Bootstrap</title>
    <Script type="module" scr="{{ asset('js/bundle.js') }}"></script>
	<script type="module" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" scr="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" scr="{{ asset('js/bootstrap.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">  
</head>

<body id="body" onload="">
	<script type="text/javascript" src="./js/scripts-body.js"></script>
	<header id="header" class="cabecalho">
		<div id="divlogotipo">
			<a id="topo"></a>
		</div>
	</header>
    <main id="principal">
		<h1 id="tituloprincipal" class="titulo destaque">Laravel + Bootstrap + JQuery</h1>
		<br>
        <section id="secaoprincipal">
            <h2 id="titulodesecao1" class="titulo">Testando Bootstrap.</h2><br>
			<br>
			<div id="textosecao1" class="corpodetexto">
                <p>Este é um teste de implementação simultânea de frameworks Laravel e Bootstrap. </p>
                <p>Website desenvolvido por Fábio de Almeida Martins em 2021. </p>
			</div>
            <br>
            <button id="botao1" class="btn btn-lg btn-success" onclick="">Entendi </button>
        </section>
        <br>
    </main>
	<br><br>
	<section id="menuprincipal">
		<nav id="navmenu" class="menu">
			<p><b>Menu principal: </b></p>
			<div id="divmenu" class="links">
				<a href="javascript:void(0)" id="mudaEstilo">Alterar estilo</a><br>
				<a href="#topo">Ir ao topo da página</a><br>
				<a href="./home.html">Voltar para a Página Inicial</a><br>
			</div>
		</nav>
	</section>
	<br><br><br>
	<footer id="rodape" class="rodape">
		<div id="divrodape" class="divrodape">
			<p><small>Desenvolvido por <b>Fábio de Almeida Martins</b><br>© 2021  -  Fábio de Almeida Martins</small></p>
		</div>
	</footer>
</body>
</html>

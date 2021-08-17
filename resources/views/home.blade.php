<!DOCTYPE html>
<!-- 
	*** Arquivo BLADE.PHP para desenvolvimento de página da web baseada em frameworks Laravel e Bootstrap
	*** Desenvolvido por Fábio de Almeida Martins - 2021 Aug - Direitos reservados
-->
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- verificar se não está obsoleto -->
		<meta http-equiv="content-language" content="pt-br, en-us"> <!-- verificar se não está obsoleto -->
		<meta name="description" content="descricao">
		<meta name="keywords" content="palavras-chaves, palavra-chave">
		<meta name="author" content="Fábio de Almeida Martins">
		<meta name="copyright" content="Fábio de Almeida Martins © 2021 - Direitos reservados"> 	<!-- 		<meta name="copyright" content="Direitos Reservados - Fabio de Almeida Martins - © 2021 "> -->
		<meta name="reply-to" content="fabio.martins.01@hotmail.com">
		<meta name="rating" content="general">
		<meta name="robots" content="noindex,nofollow">
		<meta name="googlebots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="image/x-icon" rel="shortcut icon" href="./img/favicon.ico">
		<link type="application/rss+xml" rel="alternative" title="" href="./feed.rss">
		<title>Modelo Laravel + Bootstrap</title>
		<script type="text/javascript" scr="{{ asset('js/jquery.js') }}"></script>
		<script type="text/javascript" scr="{{ asset('js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
		<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link type="text/css" rel="stylesheet" href="{{ asset('css/style-dark.css') }}">
		<link type="text/css" rel="stylesheet" id="css-light" href="" data-href="{{ asset ('css/style-light.css') }}">
	</head>

	<body id="body" onload="">
<!-- 
	<body id="body" onload="MIDIjs.play('./audio/Bach-PreludeInCMajor-BWV846.mid');">
-->
		<div id="div-conteudo">
			<header id="header" class="cabecalho">
			</header>
			<main id="principal">
				<h1 id="tituloprincipal" class="titulo destaque">Laravel + Bootstrap + JQuery</h1>
				<h2 id="titulosecundario" class="titulo">Página em branco</h2>
				<section id="secaoprincipal">
					<h5 id="titulo-secao1" class="titulo titulo-secao">Testando CSS...</h5>
					<div id="texto-secao1" class="corpodetexto">
						<p>Este é um teste de implementação simultânea de frameworks Laravel e Bootstrap. </p>
						<p>Website desenvolvido por Fábio de Almeida Martins em 2021. </p>
					</div>
					<br>
					<button id="botao1" class="btn btn-lg btn-success" onclick="">Entendi </button>
				</section>
			</main>
<!--
			<br>
			<section id="menuinferior-container" class="container-fit">
				<div id="menuinferior-box" class="box-fit menu-links" style="">
					<h6>Menu principal</h6>
					<nav id="navmenuprincipal" class="links">
						<a href="javascript:void(0)" id="mudaEstilo">Alterar estilo</a><br>
						<a href="javascript:void(0)" id="paraMusica" onclick="MIDIjs.stop();">Parar música</a><br>
						<a href="#topo">Ir ao topo da página</a><br>
						<a href="./home.html">Voltar para a Página Inicial</a><br>
					</nav>
				</div>
			</section>
			<footer id="rodape" class="rodape">
				<div id="divrodape" class="divrodape">
					<p><small>Desenvolvido por <b>Fábio de Almeida Martins</b><br>© 2021 - Fábio de Almeida Martins</small>
					</p>
				</div>
			</footer>
-->
		</div>
	</body>
</html>

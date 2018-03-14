<style type="text/css">
	.session-blocos-rodape .row .col-primaria { background-color: #1e1e1e; height: 265px }
	.session-blocos-rodape .row .col-secundaria { background-color: #171717; height: 265px }

	@font-face {
        font-family:"Geared Slab";
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Bold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Extrabold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Light.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab.ttf");
    }

    footer .bloco-links { line-height: 25px }
	footer .bloco-links a { font-family: "Geared Slab"; letter-spacing:1px; color: #000000; font-weight: 800; text-transform: uppercase }
	footer .bloco-links a:hover { color: #ffbc1b }

	footer .bloco-form { font-family: 'Open Sans', sans-serif }
	footer .bloco-form p.chamada { color: #f8a41a; font-size: 10px }
	footer .bloco-form p.endereco { color: #acacac; font-size: 10px }

	footer .bloco-form form input,
	footer .bloco-form form button { height: 30px; border-radius: 0px }
	footer .bloco-form form button { padding: 0px 12px; background-color: #f8a41a; color: #ffffff; border-color: #f8a41a }
	footer .bloco-form form button:active,
	footer .bloco-form form button:focus,
	footer .bloco-form form button:active:focus,
	footer .bloco-form form button:hover { background-color: transparent; color: #ffffff; border-color: #f8a41a }
</style>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><img src="<?= RAIZSITE ?>/img/marcacao-rodape-1.png" class="img-responsive"></div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs bloco-links">
				<a href="" class="link-default">A Club</a><br>
				<a href="" class="link-default">Motos</a><br>
				<a href="" class="link-default">Blog</a><br>
				<a href="" class="link-default">Contato</a>
			</div>

			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs bloco-form">
				<form action="" class="form-horizontal" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Enviar!</button>
						</span>
					</div>
				</form>
				<p class="chamada">Esteja atualizado sobre os novos produtos, lançamentos, promoções e muito mais!</p>
				<p class="endereco">Alto da XV: RUA DIAS DA ROCHA FILHO 79, ESQUINA COM A SETE DE ABRIL<br>CURITIBA | PARANÁ | 41 3029 0095 | 41 3057 1782</p>
				<p class="endereco">Distrito 1340: RUA MAJOR HEITOR GUIMARÃES, 1130 - SEMINÁRIO<br>CURITIBA | PARANÁ | 41 3057 1782</p>
			</div>
		</div>
	</div>
</footer>
<div class="session-blocos-rodape">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs col-primaria">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs col-secundaria">&nbsp;</div>
	</div>
</div>

</body>
</html>

<?php
	ScriptLoader::LoadPLUGINSCSS('bootstrap-3.3.7-dist/css/bootstrap.min.css');
	ScriptLoader::LoadPLUGINSJS('bootstrap-3.3.7-dist/js/bootstrap.min.js');

	ScriptLoader::LoadPLUGINSJS('OwlCarousel2-2.2.1/dist/owl.carousel.min.js');
	ScriptLoader::LoadPLUGINSCSS('OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css');
	ScriptLoader::LoadPLUGINSCSS('OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css');
?>
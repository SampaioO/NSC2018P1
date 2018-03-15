<style type="text/css">
	@media screen and (min-width: 768px) {
		body { background: url('<?= RAIZSITE ?>/img/marcacao-fundo.jpg'); background-position: center center }
	}

	@font-face {
        font-family:"Geared Slab";
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Bold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Extrabold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Light.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab.ttf");
    }

    .navbar-nav>li>a,
    .nav>li>a { font-family: 'Roboto', sans-serif; font-weight: 300; font-size: 12px }

    .navbar-nav>li>.divisoria { height: 16px; border: 1px solid #ffbc1b }

    @media screen and (min-width: 768px) and (max-width: 991px) {
    	.navbar-nav>li { margin-right: 39px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
    	.navbar-nav>li { margin-right: 31.7px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }

    @media screen and (min-width: 768px) {
    	.session-navbar .row-pesquisa .bloco-pesquisa { background-color: #171717 }
    	.navbar-nav>li>a,
    	.nav>li>a { padding: 0 !important; color: #ffbc1b }

    	.nav>li>a:focus,
    	.nav>li>a:hover { background-color: transparent !important; color: #ffbc1b }
    }

    @media screen and (min-width: 1200px) {
    	.navbar-nav>li { margin-right: 31.7px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }
</style>

<div class="container session-navbar" style="background-color: #0c0c0c">
	<div class="row row-pesquisa">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-sm-9 hidden-xs bloco-pesquisa padding-zero">
			<div class="col-lg-3 col-md-3 col-sm-3">&nbsp;</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<form action="" class="form-horizontal" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Digite aqui seu e-mail...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Enviar!</button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
                <li class="Border"><a href="">A Club</a></li>
                <li class="Border"><a href="">Motos</a></li>
            </ul>
		</div>
	</div>
	<div class="row row-links">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-sm-9 hidden-xs bloco-links padding-zero">
			<ul class="nav navbar-nav">
                <li class="Border"><a href="">A Club</a></li>
                <li class="Border"><a href="">Motos</a></li>
                <li class="Border"><a href="">Eventos</a></li>
                <li class="Border"><a href="">Notícias</a></li>
                <li class="Border"><a href="#">Loja</a></li>
                <li class="Border"><a href="">Contato</a></li>
                <li><div class="divisoria"></div></li>
                <li class="Border"><a href="">Ofertas</a></li>
            </ul>
		</div>
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">&nbsp;</div>
	</div>

	<img src="<?= RAIZSITE ?>/img/marcacao-rodape-1.png" class="img-responsive" style="position: absolute;">
</div>
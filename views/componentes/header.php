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
        .session-navbar img { left: 25px }

    	.navbar-nav>li { margin-right: 39px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        .session-navbar img { left: 50px }

        .navbar-nav.destaques>li { margin-right: 26.7px; margin-left: 10px }
        .navbar-nav.destaques>li:last-child { margin-right: 0px; margin-left: 0px }
    	.navbar-nav>li { margin-right: 31.7px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }

    @media screen and (min-width: 768px) {
        .session-navbar { padding-top: 30px; padding-bottom: 20px }
        .bloco-pesquisa { margin-bottom: 25px; padding: 10px 10px; padding-left: 0px !important; padding-right: 0px !important }

        .form-topo { font-family: 'Roboto', sans-serif; font-weight: 500 }
        .form-topo input[type="text"] { color: #999999; font-size: 12px; height: 31px }
        .form-topo button[type="button"] { background-color: #ffbb22; color: #000000; font-size: 12px; font-weight: 500; border-color: #ffbb22 }
        .form-topo button[type="button"]:focus,
        .form-topo button[type="button"]:hover { background-color: transparent !important; color: #ffbb22 }

        .session-navbar .row-pesquisa .bloco-pesquisa { background-color: #171717 }
        .navbar-nav.destaques { margin-top: 15px }
        .navbar-nav.destaques>li.telefone,
        .navbar-nav.destaques>li.telefone a { font-size: 12px !important; line-height: 15px }
        .navbar-nav.destaques>li.telefone a span { font-size: 10px !important }
        .navbar-nav.destaques>li.telefone a { float: right }
        .navbar-nav>li { color: #ffbc1b; height: 25px; }
    	.navbar-nav>li>a,
    	.nav>li>a { padding: 0 !important; color: #ffbc1b }

    	.nav>li>a:focus,
    	.nav>li>a:hover { background-color: transparent !important; color: #ffbc1b; border-bottom: 1px solid; }

        .bloco-pesquisa button.dropdown-toggle { background-color: transparent; border: none; padding: 6px 0px; color: #ffffff }
        .bloco-pesquisa button.dropdown-toggle { font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 14px; margin-left: 5px }

        .dropdown-menu>li>a { font-family: 'Roboto', sans-serif }
    }

    @media screen and (min-width: 1200px) {
        .session-navbar img { left: 50px }

        .navbar-nav.destaques>li { margin-right: 26.7px; margin-left: 10px }
        .navbar-nav.destaques>li:last-child { margin-right: 0px; margin-left: 0px }
    	.navbar-nav>li { margin-right: 31.7px }
    	.navbar-nav>li:last-child { margin-right: 0px }
    }
</style>

<div class="container session-navbar" style="background-color: #0c0c0c; position: relative">
	<a href="<?= RAIZSITE ?>">
        <img src="<?= RAIZSITE ?>/img/marcacao-rodape-1.png" class="img-responsive position-center-vertical">
    </a>

    <div class="row row-pesquisa">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
		<div class="col-lg-6 col-md-6 col-sm-9 hidden-xs bloco-pesquisa">
			<div class="col-lg-3 col-md-3 col-sm-3">
                <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 235.129 235.129" style="enable-background:new 0 0 235.129 235.129;" xml:space="preserve" width="25px" height="25px"><path d="M212.027,84.433l-3.954,0.003c-10.912-40.466-48.044-69.228-90.549-69.228c-42.253,0-79.347,28.769-90.44,69.236  l-3.987-0.003C10.361,84.441,0,94.802,0,107.538v25.941c0,12.734,10.361,23.094,23.097,23.094h2.874  c3.697,29.087,28.603,51.648,58.681,51.648h5.515c2.926,6.87,9.744,11.699,17.669,11.699h19.455  c10.585,0,19.197-8.611,19.197-19.195c0-10.586-8.612-19.199-19.197-19.199h-19.455c-7.923,0-14.739,4.828-17.666,11.695h-5.519  c-24.347,0-44.154-19.805-44.154-44.148V92.785c7.758-36.299,40.035-62.576,77.027-62.576c37.237,0,69.551,26.267,77.108,62.548  v56.31c0,4.142,3.358,7.5,7.5,7.5h9.9c12.735,0,23.096-10.36,23.096-23.095V107.53C235.129,94.795,224.768,84.433,212.027,84.433z   M107.836,196.526h19.455c2.314,0,4.197,1.884,4.197,4.199c0,2.314-1.883,4.195-4.197,4.195h-19.455  c-2.313,0-4.195-1.882-4.195-4.195C103.641,198.41,105.522,196.526,107.836,196.526z M15,133.479v-25.941  c0-4.464,3.632-8.097,8.09-8.097l2.407,0.002v42.129h-2.4C18.632,141.573,15,137.942,15,133.479z M220.129,133.471  c0,4.463-3.632,8.095-8.096,8.095h-2.4V99.435l2.4-0.002c4.464,0,8.096,3.632,8.096,8.097V133.471z" fill="#FFDA44"/></svg><button class="btn btn-secondary dropdown-toggle position-center-vertical" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajuda <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 444.819 444.819" style="enable-background:new 0 0 444.819 444.819;" xml:space="preserve"><g><path d="M434.252,114.203l-21.409-21.416c-7.419-7.04-16.084-10.561-25.975-10.561c-10.095,0-18.657,3.521-25.7,10.561   L222.41,231.549L83.653,92.791c-7.042-7.04-15.606-10.561-25.697-10.561c-9.896,0-18.559,3.521-25.979,10.561l-21.128,21.416   C3.615,121.436,0,130.099,0,140.188c0,10.277,3.619,18.842,10.848,25.693l185.864,185.865c6.855,7.23,15.416,10.848,25.697,10.848   c10.088,0,18.75-3.617,25.977-10.848l185.865-185.865c7.043-7.044,10.567-15.608,10.567-25.693   C444.819,130.287,441.295,121.629,434.252,114.203z" fill="#ffffff"/></g></svg></button>
                    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                    </ul>
                </div>
            </div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<form action="" class="form-horizontal form-topo" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="QUAL É A MOTO DOS SEUS SONHOS?">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">BUSCAR</button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
			<ul class="nav navbar-nav destaques">
                <li class="Border telefone">ALTO DA XV<br><a href="tel:30290095"><span>41</span> 3029.0095</a></li>
                <li class="Border telefone">DISTRITO 1340<br><a href="tel:30290095"><span>41</span> 3029.0095</a></li>
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
</div>
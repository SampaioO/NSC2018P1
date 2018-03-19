<style type="text/css">
	.menu-floater {
		position: fixed;
		z-index: 9999;
		right: 0;
		background-color: #313131;
		top: 40%;
		-webkit-transform: translateY( -40% );
		-moz-transform: translateY( -40% );
		transform: translateY( -40% );
	}

	.menu-floater > div {
		height: 70px;
	}

	.menu-floater > div > img {
		height: 30px;
		margin: 10px;
	}

	.box-bar {
		position: absolute;
	    width: 1px;
	    height: 50px;
	    margin-top: 10px;
	    border: 1px solid #fff;
	}
	
	/*Classes para o funcionamento correto do menu lateral baseado em css*/
	.ct-btn{
		padding:0;
		width: 70px;
	}

	.ct-btn .icon{
		margin: 15px;
		height: 37px;
	}

	.ct-content{
		width: 0px;
		height: 70px;
		padding: 0;
		transition: width .5s;
	}

	.css-transition:hover .ct-content{
		padding: 0;
		width:210px;
		transition: width .5s;
	}

	.box-content{
		width: 200px;
		margin-top: 18px;
		text-align: center;
		line-height: 1;
	}
	.ct-title{
		margin: 0;
	}
	.ct-small-height{
		height:50px
	}
    .ct-first-item{
		margin-top: 75px;
	}
	.ct-seccond-item{
		margin-top: 150px;
	}
	.ct-third-item{
		margin-top: 225px
	}
	.ct-social-icons{
		height: 43px;
	}
</style>

<div class="menu-floater hidden-sm hidden-xs css-transition">
	<div class="box-whats" style="">
		<div class="col-lg-3 col-md-3 ct-btn">
			<img src="<?= RAIZSITE ?>/img/spotIcon.png" class="icone-whats icon">
		</div>
		<div class="col-lg-9 col-md-9 div-box-content-whats ct-content">
			<div class="box-bar"></div>
			<div class="" style="">
                <a href="https://open.spotify.com/user/nenomachado/playlist/4uie6iLfLLSNKbNavLMoGr" target="_blank"><img class="spot-img" src="<?= RAIZSITE ?>/img/acelere-club1.png"></a>
			</div>
		</div>
	</div>
</div>

<div class="menu-floater hidden-sm hidden-xs css-transition ct-first-item">
	<div class="box-whats" style="">
		<div class="col-lg-3 col-md-3 ct-btn">
			<img src="<?= RAIZSITE ?>/img/whats.png" class="icone-whats icon">
		</div>
		<div class="col-lg-9 col-md-9 div-box-content-whats ct-content">
			<div class="box-bar"></div>
			<div class="box-content" style="">
				<p class="Roboto Branco-Fonte size12 ct-title">Whatsapp</p>
				<a class="reseta-link" href="tel:99953 3155"><p class="size25 Roboto Extra-Bold Laranja-Fonte"><font class="Laranja-Fonte size12 ct-small-height">41</font> 99953-3155</p></a>
			</div>
		</div>
	</div>
</div>

<div class="menu-floater hidden-sm hidden-xs css-transition ct-seccond-item">
	<div class="box-social">
		<div class="col-lg-3 col-md-3 ct-btn">
			<img src="<?= RAIZSITE ?>/img/share.png" class="icone-social icon">
		</div>
		<div class="col-lg-9 col-md-9 div-box-content-social ct-content">
			<div class="box-bar"></div>
			<div class="box-content">
				<p class="Roboto Branco-Fonte size12 ct-title">Siga-nos nas redes sociais</p>
				<a href="<?= $config->facebook ?>" target="_blank"><img src="<?= RAIZSITE ?>/img/facebook-icon.png" class="ct-social-icons"></a><a href="https://www.youtube.com/channel/UCMgijWrIdDFZQcQssR-xfAw" target="_blank"><img src="<?= RAIZSITE ?>/img/youtube-icon.png" class="ct-social-icons"></a>
			</div>
		</div>
	</div>
</div>

<div class="menu-floater hidden-sm hidden-xs css-transition ct-third-item">
	<div class="box-calendario">
		<div class="col-lg-3 col-md-3 ct-btn">
			<img src="<?= RAIZSITE ?>/img/calendar-icon.png" class="icone-calendario icon">
		</div>
		<div class="col-lg-9 col-md-9 div-box-content-calendario ct-content">
			<div class="box-bar"></div>
			<div class="box-content">
				<p class="size25 Roboto Extra-Bold Laranja-Fonte ct-title">EVENTOS</p>
				<p class="Roboto Branco-Fonte size12 ct-title">Confira a agenda</p>
			</div>
		</div>
	</div>
</div>

<div class="container" style="background-color: #ffffff">
	<div class="row" style="margin-top: 50px; margin-bottom: 50px">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-promocao.png" class="img-responsive">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-promocao.png" class="img-responsive">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-promocao.png" class="img-responsive">
		</div>
	</div>
</div>

<style type="text/css">
	.center { display: block !important; text-align: center !important; text-align: -webkit-center !important }

	.titulo { font-family: 'Roboto', sans-serif; font-weight: 600; text-transform: uppercase;  border-radius: 15px; font-size: 21px; padding-top: 10px; padding-bottom: 10px; margin-bottom: 30px }
	.titulo.amarelo { color: #000000; background-color: #ffbc1b }
	.titulo.preto { color: #f9a61a; background-color: #000000 }
	.titulo hr { margin-top: 0; margin-bottom: 10px; border: 0; border-top: 3px solid #eee; width: 25% }
</style>
<div class="container" style="background-color: #ffffff">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="titulo preto center">1903 Motorcycle Apparel<hr></div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<img src="<?= RAIZSITE ?>/img/marcacao-camiseta.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<img src="<?= RAIZSITE ?>/img/marcacao-camiseta.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<img src="<?= RAIZSITE ?>/img/marcacao-camiseta.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<img src="<?= RAIZSITE ?>/img/marcacao-camiseta.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.div-moto { margin-bottom: 60px }
	.div-moto .moto-informacoes { margin-top: 12px; margin-bottom: 8px }
	.div-moto .moto-informacoes p { font-family: 'Roboto', sans-serif; color: #58595b; margin: 0 }
	.div-moto .moto-informacoes p.valor { font-weight: 500 }
	.div-moto .moto-informacoes p.nome,
	.div-moto .moto-informacoes p.ano { font-size: 12px }
	.div-moto .moto-informacoes p.valor { margin-top: 8px }

	a.btn-detalhes { font-family: 'Roboto', sans-serif; font-weight: 500 !important; text-transform: uppercase; border-radius: 0 !important; font-size: 10px !important ; margin-left: auto; margin-right: auto; width: 180px }
	a.btn-detalhes { background-color: #ffbc1b; color: #000000; border-color: #ffbc1b }
	a.btn-detalhes:hover,
	a.btn-detalhes:focus,
	a.btn-detalhes:active:hover { background-color: transparent; color: #ffbc1b; border-color: #ffbc1b }
</style>
<div class="container" style="background-color: #ffffff">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="titulo amarelo center">novidades na club</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div-moto">
			<div style="height: 156px; background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%"></div>

			<div class="moto-informacoes center">
				<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
				<p class="ano">2016/2016</p>
				<p class="valor">R$ 57.900,00</p>
			</div>

			<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
		</div>
	</div>
</div>
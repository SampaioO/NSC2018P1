<div class="container">
	<div class="row">
		<div class="owl-carousel owl-theme" id="slideHome">
	        <div class="item">
	            <div class="bg-carousel" style="height: 500px; background: url('http://www.club1903motorcycles.com.br/cms/uploads/slider-fachada-desktop.jpg'); background-position: center center">
	                <div class="container">
	                </div>
	            </div>
	        </div>
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#slideHome').owlCarousel({
    	    loop: true,
    	    dots: false,
            nav: false,
    	    items: 1,
    	    autoplay: true
    	});
        
        $('#slidesMobile').owlCarousel({
    	    loop: true,
    	    dots: false,
            nav: false,
    	    items: 1,
    	    autoplay: true
    	});
    });
</script>

<style type="text/css">
	
</style>
<div class="container" style="background-color: #ffffff">
	<div class="row" style="margin-top: 50px; margin-bottom: 50px">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-promocao.png" class="img-responsive">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-promocao.png" class="img-responsive">
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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

	.tiles { position: absolute; top: 0; left: 0; width: 100%; height: 100% }
	.tile { position: relative; float: left; height: 100%; overflow: hidden; width: 100% }
	.photo { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-repeat: no-repeat; background-position: center center !important; background-size: 85% !important; background-repeat: no-repeat !important; transition: transform .5s ease-out }
</style>
<div class="container" style="background-color: #ffffff; padding-bottom: 50px">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="titulo preto center">1903 Motorcycle Apparel<hr></div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 229px">
				<div class="tiles">
					<div class="tile" data-scale="1.1">
						<div class="photo" style="background: url('<?= RAIZSITE ?>/img/marcacao-camiseta.png')"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 229px">
				<div class="tiles">
					<div class="tile" data-scale="1.1">
						<div class="photo" style="background: url('<?= RAIZSITE ?>/img/marcacao-camiseta.png')"></div>
					</div>
				</div>
			</div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 229px">
				<div class="tiles">
					<div class="tile" data-scale="1.1">
						<div class="photo" style="background: url('<?= RAIZSITE ?>/img/marcacao-camiseta.png')"></div>
					</div>
				</div>
			</div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 229px">
				<div class="tiles">
					<div class="tile" data-scale="1.1">
						<div class="photo" style="background: url('<?= RAIZSITE ?>/img/marcacao-camiseta.png')"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.tile').on('mouseover', function(){
		$(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
    }).on('mouseout', function(){
		$(this).children('.photo').css({'transform': 'scale(1)'});
    }).on('mousemove', function(e){
		$(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
    })
</script>

<style type="text/css">
	.div-moto { margin-bottom: 60px }
	.div-moto .moto-informacoes { margin-top: 12px; margin-bottom: 8px }
	.div-moto .moto-informacoes p { font-family: 'Roboto', sans-serif; color: #58595b; margin: 0 }
	.div-moto .moto-informacoes p.valor { font-weight: 500 }
	.div-moto .moto-informacoes p.nome,
	.div-moto .moto-informacoes p.ano { font-size: 12px }
	.div-moto .moto-informacoes p.valor { margin-top: 8px }

	a.btn-detalhes { font-family: 'Roboto', sans-serif; font-weight: 500 !important; text-transform: uppercase; border-radius: 0 !important; font-size: 10px !important ; margin-left: auto; margin-right: auto }
	a.btn-detalhes { background-color: #ffbc1b; color: #000000; border-color: #ffbc1b; -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }
	a.btn-detalhes:hover,
	a.btn-detalhes:focus,
	a.btn-detalhes:active:hover { background-color: transparent; color: #ffbc1b; border-color: #ffbc1b }

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.div-moto .img-moto { height: 115px }
		a.btn-detalhes { width: 140px }
	}

	@media screen and (min-width: 768px) {
		.img-moto { position: relative }
		.div-moto .camada { -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }
		.div-moto .camada { opacity: 0 }
		.div-moto:hover .camada { opacity: 0.3 }
		.div-moto:hover a.btn-detalhes { background-color: transparent; color: #ffbc1b; border-color: #ffbc1b }
	}
	@media screen and (min-width: 992px) {
		.div-moto .img-moto { height: 156px }
		a.btn-detalhes { width: 180px }
	}
</style>
<div class="container" style="background-color: #ffffff">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="titulo amarelo center">novidades na club</div>
		</div>

		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>

		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
		<a href="">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 div-moto">
				<div class="img-moto" style="background: url('<?= RAIZSITE ?>/img/marcacao-moto.png'); width: 100%; border-radius: 15px; background-size: 100%">
					<div class="camada" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #000000; border-radius: 15px"></div>
				</div>

				<div class="moto-informacoes center">
					<p class="nome">HARLEY-DAVIDSON BREAKOUT</p>
					<p class="ano">2016/2016</p>
					<p class="valor">R$ 57.900,00</p>
				</div>

				<a role="button" class="btn btn-detalhes center" href="">Ver detalhes</a>
			</div>
		</a>
	</div>
</div>
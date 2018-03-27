<?php
	ScriptLoader::LoadPLUGINSCSS('fancybox-master/dist/jquery.fancybox.min.css');
	ScriptLoader::LoadPLUGINSJS('fancybox-master/dist/jquery.fancybox.min.js');
?>

<style type="text/css">
	@media screen and (min-width: 768px) {
		.bg-carousel { height: 500px }
		.bg-destaque { height: 245px }
		.session-banner,
		.session-destaque,
		.session-logos,
		.session-conteudo,
		.session-modelos { position: relative }
		.session-logos,
		.session-modelos { background-color: #ffffff }
	}
	@media screen and (max-width: 767px) {
		.session-banner,
		.session-destaque { padding-left: 15px !important; padding-right: 15px !important }
		.bg-carousel { height: 250px; background-size: cover !important }
		.bg-destaque { height: 145px }
	}
</style>
<div class="container session-banner">
	<div class="row">
		<div class="bg-carousel" style="background: url('http://www.club1903motorcycles.com.br/cms/uploads/slider-fachada-desktop.jpg'); background-position: center center"></div>
	</div>
</div>

<style type="text/css">
	.session-conteudo { background-color: #ffffff }
	.session-conteudo .bloco-conteudo p { font-family: 'Roboto', sans-serif; color: #4b4b4b }
</style>
<div class="container session-conteudo">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bloco-conteudo">
			<p>A Club 1903 Motorcycles é o ponto de encontro dos amantes da Harley Davidson em Curitiba. O lugar é ideal para quem gosta de viver com o coração acelerado e respiração ao vento. Afinal, muito mais do que a marca mais amada de motocicletas, a Harley Davidson é um estilo de vida. O nome Club 1903 Motorcycles é uma homenagem ao ano de criação da lendária marca. Na época, dois jovens de Milwaukee, nos Estados Unidos, resolvem instalar um motor em uma bicicleta, com a intenção de se locomover mais de forma mais rápida e cômoda nas subidas.</p>
			<p>Estes dois jovens se chamavam William S. Harley e Arthur Davidson. Mal sabiam eles que estavam criando um dos meios de transporte mais utilizados do mundo e uma das marcas mais amadas de todos os tempos, a Harley Davidson. Em pouco tempo, a notoriedade da marca cresceu e ultrapassou os limites da região onde viviam os jovens. No ano de 1907 foram produzidas pelo menos cem máquinas.</p>
			<p>Para promover a marca e comprovar a qualidade a fim de fazer a demonstração flagrante da qualidade das motos doravante fabricadas, Walter Davidson envolve-se de desporto motociclista e alcança a vitória, em 1907, numa famosa corrida de resistência. Assim, a marca Harley conta com mais de 100 anos de uma história marcada por inovação, aventura e paixão tornou-se uma lenda no mundo inteiro. Em homenagem a essa trajetória, a Club 1903 Motorcycles foi criada em um espaço amplo e personalizado, a fim de reunir o espírito de liberdade da Harley Davidson e os admiradores das motocicletas mais desejadas do mundo.</p>
			<p>A Club 1903 Motorcycles oferece modelos seminovos das linhas Sportster, Dyna, Softail, Touring, V-Rod. Na loja você também encontra diversos acessórios Harley Davidson, peças, vestuário, capacetes, luvas, viseiras e muito mais. Nossa missão é unir bons amigos para continuar buscando por aventuras cada vez melhores.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-auto-xv.jpg" class="img-responsive">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<img src="<?= RAIZSITE ?>/img/marcacao-distrito-1340.jpg" class="img-responsive">
		</div>
	</div>
</div>

<div class="container session-destaque">
	<div class="row">
		<div class="bg-destaque" style="background: url('<?= RAIZSITE ?>/img/marcacao-sessao-club.jpg'); background-position: center center; background-size: cover"></div>
	</div>
</div>

<div class="container session-modelos">
	<div class="row">
		<center id="categorias">
	        <ul class="list-inline">
				<li>
					<a data-id="#Dyna-Harley" class="menu text-center Geared-Slab Extra-Bold size17 reseta-link Preto-Fonte">
						DYNA
					</a>
				</li>
				<li>
					<a data-id="#SPORTSTER-Harley" class="menu text-center Geared-Slab Extra-Bold size17 reseta-link Preto-Fonte">
						SPORTSTER
					</a>
				</li>
				<li>
					<a data-id="#SOFTAIL-Harley" class="menu text-center Geared-Slab Extra-Bold size17 reseta-link Preto-Fonte">
						SOFTAIL
					</a>
				</li>
				<li>
					<a data-id="#TOURING-Harley" class="menu text-center Geared-Slab Extra-Bold size17 reseta-link Preto-Fonte">
						TOURING
					</a>
				</li>
				<li>
					<a data-id="#V-ROD-Harley" class="menu text-center Geared-Slab Extra-Bold size17 reseta-link Preto-Fonte">
						V-ROD
					</a>
				</li>
			</ul>
        </center>
    </div>
    <div class="row" style="margin-bottom: 50px">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
			<h4 class="text-left Geared-Slab Extra-Bold size14 Laranja-Fonte Uppercase" style="margin-bottom: 0">harley-davidson</h4>
			<h2 class="text-left Geared-Slab Extra-Bold size3 Laranja-Fonte Uppercase" style="margin-top: 0">DYNA</h2>
			
			<div class="Open-Sans Light size14 Preto-Fonte">
				<p>Uma das principais características das motocicletas da família Dyna é a suspensão traseira bichoque visível, que conecta a balança à caixa de marchas. Essa a diferença da família Softail que tem sua suspensão escondida sobre a caixa de marchas. A linha possui algumas customizações, dentre elas é possível citar a Dyna SuperGlide, SuperGlide Custom e a WideGlide.</p>
				<p>Os quadros das motocicletas Dyna foram desenvolvidos entre os anos oitenta e começo dos anos noventa. O modelo de estreia dessa família foi a FXDB Sturgis (1991) que foi lançada como edição limitada. Em 1992, chega ao mercado a linha FXDB Daytona, também com edição limitada e um modelo de produção FXD Super Glide.</p>
				<p>Os modelos Dyna utilizam o motor big-twin, garfos telescópicos de pequeno diâmetro, semelhantes aos utilizados na Sportster até 2012. Todos os modelos Dyna têm denominações que começam com FXD, por exemplo: FXDWG (Dyna Amplo Glide) e FXDL (Dyna Low Rider).</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-7" style="height: 530px">
			<div class="img-item" style="overflow: hidden; position: relative;">
				<a data-fancybox="dyna" href="http://www.club1903motorcycles.com.br/cms/uploads/20160708092710_dyna_fat_bob.jpg">
					<img src="http://www.club1903motorcycles.com.br/cms/uploads/20160708092710_dyna_fat_bob.jpg" class="Dyna img-responsive" alt="Foto Destaque Linha Dyna">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container session-logos">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-zero">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 chamada-marcas text-center">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 padding-zero">
                    <h4 class="Bold">AS MELHORES MARCAS<br>VOCÊ ENCONTRA AQUI</h4>
                </div>
                <div class="hidden-xs col-sm-2 col-md-2 col-lg-2 padding-zero">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                <div class="owl-carousel owl-theme" id="slideMarcas">
                    <div class="item">
                        <img src="http://www.club1903motorcycles.com.br/2018/imagens/logo1.png" class="img-responsive center-block">
                    </div>
                    <div class="item">
                        <img src="http://www.club1903motorcycles.com.br/2018/imagens/logo2.png" class="img-responsive center-block">
                    </div>
                    <div class="item">
                        <img src="http://www.club1903motorcycles.com.br/2018/imagens/logo3.png" class="img-responsive center-block">
                    </div>
                    <div class="item">
                        <img src="http://www.club1903motorcycles.com.br/2018/imagens/logo4.png" class="img-responsive center-block">
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#slideMarcas').owlCarousel({
		    loop: true,
		    dots: false,
	        nav: false,
	        margin: 10,
	        autoplay: true,
		    autoplay: true,
		    responsive: {
		    	0: {
		    		items: 1
		    	},
		    	768: {
		    		items: 3
		    	},
		    	992: {
		    		items: 4
		    	}
		    }
		});
	});
</script>
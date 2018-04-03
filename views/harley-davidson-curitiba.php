<?php
	ScriptLoader::LoadPLUGINSCSS('fancybox-master/dist/jquery.fancybox.min.css');
	ScriptLoader::LoadPLUGINSJS('fancybox-master/dist/jquery.fancybox.min.js');
?>

<style type="text/css">
	@media screen and (min-width: 768px) {
		.bg-carousel { height: 500px }
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

	h1,
	h2,
	h3 { font-family: 'Geared Slab' !important; margin: 0 !important }
</style>
<div class="container session-conteudo">
	<style type="text/css">
		.row-harley-principal h1 { color: #f9a61a; text-transform: uppercase; font-weight: 600; font-size: 44px }
		.row-harley-principal h2 { color: #4b4b4b; text-transform: uppercase; font-size: 29px }
		.row-harley-conteudo .bloco-conteudo p { margin-bottom: 16px }

		@media screen and (max-width: 767px) {}

		@media screen and (min-width: 768px) and (max-width: 991px) {}
		@media screen and (min-width: 992px) and (max-width: 1199px) {}

		@media screen and (min-width: 768px) {
			.row-harley-principal div:first-child { background-color: #000000 }

			.row-harley-principal h1 { margin-left: 32px !important; padding-top: 10px; padding-bottom: 10px }
			.row-harley-principal h2 { margin-left: 32px !important; padding-top: 10px; padding-bottom: 10px }

			.row-harley-conteudo .bloco-conteudo { padding-top: 40px; padding-bottom: 30px }
		}
		@media screen and (min-width: 992px) {}
		@media screen and (min-width: 1200px) {}
	</style>
	<div class="row row-harley-principal">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Club 1903 motorcycles,</h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2>PRA QUEM VIVE A EMOÇÃO DO ESTILO HARLEY DAVIDSON.</h2>
		</div>
	</div>
	<div class="row row-harley-conteudo">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bloco-conteudo">
			<p>A Club 1903 Motorcycles é o ponto de encontro dos amantes da Harley Davidson em Curitiba. O lugar é ideal para quem gosta de viver com o coração acelerado e respiração ao vento. Afinal, muito mais do que a marca mais amada de motocicletas, a Harley Davidson é um estilo de vida. O nome Club 1903 Motorcycles é uma homenagem ao ano de criação da lendária marca. Na época, dois jovens de Milwaukee, nos Estados Unidos, resolvem instalar um motor em uma bicicleta, com a intenção de se locomover mais de forma mais rápida e cômoda nas subidas.</p>
			<p>Estes dois jovens se chamavam William S. Harley e Arthur Davidson. Mal sabiam eles que estavam criando um dos meios de transporte mais utilizados do mundo e uma das marcas mais amadas de todos os tempos, a Harley Davidson. Em pouco tempo, a notoriedade da marca cresceu e ultrapassou os limites da região onde viviam os jovens. No ano de 1907 foram produzidas pelo menos cem máquinas.</p>
			<p>Para promover a marca e comprovar a qualidade a fim de fazer a demonstração flagrante da qualidade das motos doravante fabricadas, Walter Davidson envolve-se de desporto motociclista e alcança a vitória, em 1907, numa famosa corrida de resistência. Assim, a marca Harley conta com mais de 100 anos de uma história marcada por inovação, aventura e paixão tornou-se uma lenda no mundo inteiro. Em homenagem a essa trajetória, a Club 1903 Motorcycles foi criada em um espaço amplo e personalizado, a fim de reunir o espírito de liberdade da Harley Davidson e os admiradores das motocicletas mais desejadas do mundo.</p>
			<p>A Club 1903 Motorcycles oferece modelos seminovos das linhas Sportster, Dyna, Softail, Touring, V-Rod. Na loja você também encontra diversos acessórios Harley Davidson, peças, vestuário, capacetes, luvas, viseiras e muito mais. Nossa missão é unir bons amigos para continuar buscando por aventuras cada vez melhores.</p>
		</div>
	</div>

	<style type="text/css">
		.row-harley-tour h3 { color: #f9a61a; text-transform: uppercase; font-weight: 600; font-size: 44px }

		.div-tour { position: relative; -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }

		@media screen and (max-width: 767px) {
			.div-tour { margin-bottom: 80px }
		}

		@media screen and (min-width: 768px) and (max-width: 991px) {
			.div-tour .destaque { width: 345px }
		}
		@media screen and (min-width: 992px) and (max-width: 1199px) {}

		@media screen and (min-width: 768px) {
			.row-harley-tour { padding-top: 25px; padding-bottom: 100px }
			.row-harley-tour h3 { margin-left: 32px !important }

			.div-tour .destaque { top: 0; -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }
			.div-tour:hover .destaque { top: 45px; -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }
		}
		@media screen and (min-width: 992px) {
			.div-tour .destaque { width: 450px }
		}
		@media screen and (min-width: 1200px) {}
	</style>
	<div class="row row-harley-tour">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Tour 360º</h3>
		</div>
		<a href="" target="_blank">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 div-tour">
				<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
					<p style="text-transform: uppercase; color: #ffbc1b; font-size: 16px; padding-top: 11px">Alto da XV</p>

					<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-auto-xv.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 265px; position: absolute; width: 100%"></div>
				</div>

				<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-auto-xv.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 265px; position: absolute"></div>
			</div>
		</a>
		<a href="" target="_blank">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 div-tour">
				<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
					<p style="text-transform: uppercase; color: #ffbc1b; font-size: 16px; padding-top: 11px">Distrito 1340</p>

					<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-distrito-1340.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 265px; position: absolute; width: 100%"></div>
				</div>

				<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-distrito-1340.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 265px; position: absolute; top: 45px"></div>
			</div>
		</a>
	</div>
</div>

<style type="text/css">
	.row-harley-destaque .bg-destaque { background: url('<?= RAIZSITE ?>/img/marcacao-sessao-club.jpg'); background-position: center center; background-size: cover; position: relative }
	.row-harley-destaque .bg-destaque div { background-color: #25211a; position: absolute; right: 0; padding: 15px 15px }

	.row-harley-destaque .bg-destaque h3 { color: #f9a61a; font-size: 30px }
	.row-harley-destaque .bg-destaque p { font-family: 'Roboto', sans-serif; color: #ffffff }

	@media screen and (max-width: 767px) {
		.row-harley-destaque .bg-destaque { height: 270px }
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {}
	@media screen and (min-width: 992px) and (max-width: 1199px) {}

	@media screen and (min-width: 768px) {
		.row-harley-destaque .bg-destaque { height: 245px }
		
		.row-harley-destaque .bg-destaque div { border-top-left-radius: 15px; border-bottom-left-radius: 15px }

		.row-harley-destaque .bg-destaque h3 { margin-bottom: 10px !important }
	}
	@media screen and (min-width: 992px) {}
	@media screen and (min-width: 1200px) {}
</style>
<div class="container session-destaque">
	<div class="row row-harley-destaque">
		<div class="bg-destaque">
			<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 position-center-vertical">
				<h3>MOTO HARLEY-DAVIDSON<br>EM CURITIBA É NA CLUB 1903</h3>
				<p>Encontre a moto Harley Davidson que vai mudar a sua vida. Confira os modelos Sportster, Dyna, Softail, Touring, V-Rod e escolha o modelo que mais combina com o seu estilo de vida.</p>
				<p>A estrada espera por você.</p>
			</div>
		</div>
	</div>
</div>

<div class="container session-modelos">
	<style type="text/css">
		.list-inline a { font-family: 'Roboto'; font-weight: 200; color: #000000 }
		.list-inline a:hover { color: #000000; border-bottom: 1px solid #000000 }

		@media screen and (max-width: 768px) {
			.session-modelos { background-color: #ffffff }
			.session-modelos .list-inline { margin-top: 25px; margin-bottom: 40px; padding-top: 10px; padding-bottom: 10px }
			.session-modelos .list-inline { background-color: #f7a600; border-radius: 10px }
		}

		@media screen and (min-width: 768px) and (max-width: 991px) {
			.list-inline { height: 41px }
			.list-inline a { font-size: 15px }
			.list-inline>li { padding-right: 15px !important; padding-left: 15px !important }
			.session-modelos .list-inline { margin-top: 25px; margin-bottom: 40px; padding-top: 10px; padding-bottom: 10px }
			.session-modelos .list-inline { width: 500px; background-color: #f7a600; border-radius: 10px }
		}
		@media screen and (min-width: 992px) and (max-width: 1199px) {
			.list-inline { height: 43px }
			.list-inline a { font-size: 16.5px }
			.list-inline>li { padding-right: 13px !important; padding-left: 13px !important }
			.session-modelos .list-inline { margin-top: 25px; margin-bottom: 40px; padding-top: 10px; padding-bottom: 10px }
			.session-modelos .list-inline { width: 500px; background-color: #f7a600; border-radius: 10px }
		}
		@media screen and (min-width: 1200px) {
			.list-inline { height: 46px }
			.list-inline a { font-size: 18px }
			.list-inline>li { padding-right: 10px !important; padding-left: 10px !important }
			.session-modelos .list-inline { margin-top: 25px; margin-bottom: 40px; padding-top: 10px; padding-bottom: 10px }
			.session-modelos .list-inline { width: 500px; background-color: #f7a600; border-radius: 10px }
		}
	</style>
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

    <style type="text/css">
		.rotate { -webkit-transform: rotate(-180deg); -moz-transform: rotate(-180deg); -ms-transform: rotate(-180deg); -o-transform: rotate(-180deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); }

	    .row-modelo .conteudo { text-align: justify; color: #4b4b4b }
	    .row-modelo .conteudo p { margin-bottom: 16px }

	    .row-modelo { margin-bottom: 50px }
	    .row-modelo .titulo-harley { font-family: 'Geared Slab' !important; margin: 0 !important; font-size: 20px; color: #f9a61a; text-transform: uppercase }
	    .row-modelo .subtitulo-harley { font-family: 'Geared Slab' !important; margin: 0 !important; font-size: 45px; margin-top: -10px !important; color: #f9a61a }

	    .btn-modelo { font-family: 'Roboto', sans-serif !important; font-weight: 700 !important }
	    .btn-modelo { bottom: 15px; background-color: #f7a600; border-radius: 8px; text-transform: uppercase; font-size: 18px; color: #000000; padding: 8px 25px !important }
	</style>
    <div class="row row-modelo">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<h4 class="titulo-harley">harley-davidson</h4>
			<p class="subtitulo-harley">DYNA</p>
			
			<div class="Open-Sans Light size14 Preto-Fonte conteudo">
				<p>Uma das principais características das motocicletas da família Dyna é a suspensão traseira bichoque visível, que conecta a balança à caixa de marchas. Essa a diferença da família Softail que tem sua suspensão escondida sobre a caixa de marchas. A linha possui algumas customizações, dentre elas é possível citar a Dyna SuperGlide, SuperGlide Custom e a WideGlide.</p>
				<p>Os quadros das motocicletas Dyna foram desenvolvidos entre os anos oitenta e começo dos anos noventa. O modelo de estreia dessa família foi a FXDB Sturgis (1991) que foi lançada como edição limitada. Em 1992, chega ao mercado a linha FXDB Daytona, também com edição limitada e um modelo de produção FXD Super Glide.</p>
				<p>Os modelos Dyna utilizam o motor big-twin, garfos telescópicos de pequeno diâmetro, semelhantes aos utilizados na Sportster até 2012. Todos os modelos Dyna têm denominações que começam com FXD, por exemplo: FXDWG (Dyna Amplo Glide) e FXDL (Dyna Low Rider).</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-6 div-tour" style="margin-top: 40px">
			<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
				<svg class="rotate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; left: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<p style="font-family: 'Geared Slab' !important; text-transform: uppercase; color: #ffbc1b; font-size: 20px; padding-top: 18px">Super glide custom</p>

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; right: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-dyna.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; width: 100%"></div>
			</div>

			<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-dyna.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; top: 60px">
				<a role="button" class="btn btn-modelo position-center">Escolha a sua</a>
			</div>
		</div>
	</div>

	<div class="row row-modelo">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<h4 class="titulo-harley">harley-davidson</h4>
			<p class="subtitulo-harley">SPORTSTER</p>
			
			<div class="Open-Sans Light size14 Preto-Fonte conteudo">
				<p>A Sportster é a linha de motos Harley-Davidson com mais tempo na história do motociclismo. Surgiu em 1957, para substituir o modelo K, possuía 850cc e 55 polegadas.</p>

				<p>Chamada de "Sporty", o modelo fez muito sucesso nas pistas de corrida, e também ganhou notoriedade e admiração fora delas, sendo admirada não só por corredores, mas por celebridades como Elvis Presley, que possuiu mais de 20 modelos dessas motocicletas. Por esse motivo elas também ficaram conhecidas como Elvis Bikes.</p>

				<p>A Harley Davidson Sportster é a única linha de motos que mantém a denominação XL e os traços básicos comparáveis com os modelos que as originaram.</p>

				<p>No mercado brasileiro, a família não é completa como nos Estados Unidos, que tem em linha hoje a Superlow, a 883 Iron, a Sevent-Two, Forty Eigth, 1200 Custom, Superlow 1200T, e a Roadster.</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-6 div-tour" style="margin-top: 40px">
			<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
				<svg class="rotate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; left: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<p style="font-family: 'Geared Slab' !important; text-transform: uppercase; color: #ffbc1b; font-size: 20px; padding-top: 18px">XL 1200</p>
				
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; right: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-sportster.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; width: 100%"></div>
			</div>

			<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-sportster.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; top: 60px">
				<a role="button" class="btn btn-modelo position-center">Escolha a sua</a>
			</div>
		</div>
	</div>

	<div class="row row-modelo">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<h4 class="titulo-harley">harley-davidson</h4>
			<p class="subtitulo-harley">SOFTAIL</p>
			
			<div class="Open-Sans Light size14 Preto-Fonte conteudo">
				<p>A principal característica da Softail são as molas e amortecedores traseiros ocultos sob a caixa de transmissão, lembrando o visual das antigas Harleys que não possuíam suspensão traseira e eram chamadas de hardtail (rabo-duro). O nome Softail (rabo macio) foi justamente para designar uma motocicleta com suspensão traseira que, por não estar aparente, tratou de resgatar uma importante referência estética da marca.</p>

				<p>A FXST, lançada em 1983, foi primeira motocicleta da linha Softail. Foi um projeto inovador, que lançou o novo motor Evolution de 1340cc, considerado um grande marco na história da Harley-Davidson.</p>

				<p>O curioso é o que o projeto da Softail não nasceu dentro da Harley-Davidson. O criador foi um engenheiro que queria resgatar o modelo hardtail, mas com a suspensão escondida, possibilitando o uso das motocicletas em viagens longas.</p>

				<p>Depois de diversas tentativas, Bill Davis – o engenheiro – atingiu o resultado que desejava e vendeu a patente e as ferramentas para que a Harley-Davidson pudesse produzir essa família de motocicletas em larga escala.</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-6 div-tour" style="margin-top: 40px">
			<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
				<svg class="rotate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; left: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<p style="font-family: 'Geared Slab' !important; text-transform: uppercase; color: #ffbc1b; font-size: 20px; padding-top: 18px">FAT BOY SPECIAL</p>
				
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; right: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-softail.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; width: 100%"></div>
			</div>

			<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-softail.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; top: 60px">
				<a role="button" class="btn btn-modelo position-center">Escolha a sua</a>
			</div>
		</div>
	</div>

	<div class="row row-modelo">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<h4 class="titulo-harley">harley-davidson</h4>
			<p class="subtitulo-harley">TOURING</p>
			
			<div class="Open-Sans Light size14 Preto-Fonte conteudo">
				<p>A Touring é a linha da Harley-Davidson feita especialmente para as estradas. Ela possui características para longas viagens: como grande capacidade de carga, para-brisas e sistemas de som. Os dois modelos de maior destaque dessa família são a Road King e a Electra Glide.</p>

				<p>Foram realizadas diversas modificações e melhorias nos motores da Touring, mas sempre foi mantida a arquitetura tradicional dos dois cilindros em V e refrigeração a ar, de construção bastante simples e robusta.</p>

				<p>As motocicletas da família da Touring são grandes e pesadas, tudo para dar todo o conforto para o piloto e para o passageiro durante as viagens. Ela vem equipada com grandes bolsas laterais que são a sua marca registrada.</p>

				<p>A polícia rodoviária americana adotou alguns modelos da linha Touring para compor sua frota, imortalizando esse estilo de motocicletas em diversos filmes em que aparece um policial rodoviário pilotando um modelo Touring.</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-6 div-tour" style="margin-top: 40px">
			<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
				<svg class="rotate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; left: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<p style="font-family: 'Geared Slab' !important; text-transform: uppercase; color: #ffbc1b; font-size: 20px; padding-top: 18px">ELECTRA GLIDE ULTRA LIMITED</p>
				
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; right: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-touring.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; width: 100%"></div>
			</div>

			<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-touring.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; top: 60px">
				<a role="button" class="btn btn-modelo position-center">Escolha a sua</a>
			</div>
		</div>
	</div>

	<div class="row row-modelo">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<h4 class="titulo-harley">harley-davidson</h4>
			<p class="subtitulo-harley">V-ROD</p>
			
			<div class="Open-Sans Light size14 Preto-Fonte conteudo">
				<p>A V-Rod surgiu em 2001 e foi desenvolvida para fazer frente às marcas japonesas. É um modelo personalizado de motocicletas de alto desempenho da Harley-Davidson, com o motor Revolution desenvolvido em parceria com a Porsche. A V-Rod utiliza, pela primeira vez, refrigeração líquida. O tanque de combustível está localizado abaixo do assento, ao invés de ficar na parte da frente, inspirado na Superbike VR-1000, também da Harley.</p>

				<p>Todos os modelos da V-Rod são produzidos em Missouri (Kansas), na fábrica de veículos e operações de Powertrain. Sucesso absoluto no Brasil, o modelo utiliza um motor mais silencioso, refrigerado a água.</p>

				<p>Seguindo o conceito de Power-cruise, a V-Rod é facilmente reconhecida pelo motor V-Twin de 60 graus. Motor com 115cv de potência e que chega em 8.250 RPM antes de entrar na faixa vermelha, que atinge 9.000 RPM.</p>
			</div>
		</div>

		<div class="hidden-xs hidden-sm hidden-md col-lg-6 div-tour" style="margin-top: 40px">
			<div class="fundo" style="background-color: #000000; position: relative; height: 265px; border-radius: 15px; text-align: center">
				<svg class="rotate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; left: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<p style="font-family: 'Geared Slab' !important; text-transform: uppercase; color: #ffbc1b; font-size: 20px; padding-top: 18px">NIGHT ROD SPECIAL</p>
				
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357; position: absolute; top: 20px; right: 25px" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5   " fill="#f7a600"/></g></g></svg>

				<div class="destaque hidden-lg hidden-md hidden-sm" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-v-rod.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; width: 100%"></div>
			</div>

			<div class="destaque hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-modelo-v-rod.jpg'); background-size: cover; background-position: center center; border-radius: 15px; height: 285px; position: absolute; top: 60px">
				<a role="button" class="btn btn-modelo position-center">Escolha a sua</a>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.chamada-marcas img { height: 211px }

	@media screen and (min-width: 768px) and (max-width: 1199px) {
		#slideMarcas { margin-left: -50px }
	}
	@media screen and (min-width: 768px) {
		#slideMarcas { margin-top: 80px }
	}
	@media screen and (max-width: 767px) {
		.session-logos { background-color: #ffffff }
	}
</style>
<div class="container session-logos">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-zero">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 chamada-marcas text-center">
                <center><img src="<?= RAIZSITE ?>/img/marcacao-pin.png" class="img-responsive"></center>
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
		    		items: 2
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
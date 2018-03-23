<style type="text/css">
    @font-face {
        font-family:"Geared Slab";
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Bold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Extrabold.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab-Light.ttf");
        src:url("<?= RAIZSITE ?>/fonts/GearedSlab.ttf");
    }

    .menu-floater { position: fixed; z-index: 9999; right: 0; background-color: #313131; top: 40%; -webkit-transform: translateY( -40% ); -moz-transform: translateY( -40% ); transform: translateY( -40% ) }
    .menu-floater > div { height: 70px }
    .menu-floater > div > img { height: 30px; margin: 10px }
    .box-bar { position: absolute; width: 1px; height: 50px; margin-top: 10px; border: 1px solid #fff }
    
    /* Classes para o funcionamento correto do menu lateral baseado em css */
    .ct-btn { padding: 0 !important; width: 70px !important }
    .ct-btn .icon { margin: 15px !important; height: 37px !important }

    .ct-content { width: 0px !important; height: 70px !important; padding: 0 !important; transition: width .5s }
    .css-transition:hover .ct-content{ padding: 0 !important; width: 210px !important; transition: width .5s }

    .box-content { width: 200px !important; margin-top: 18px !important; text-align: center !important; line-height: 1 }
    .ct-title { margin: 0 !important }
    .ct-small-height { height: 50px !important }
    .ct-first-item { margin-top: 75px !important }
    .ct-seccond-item { margin-top: 150px !important }
    .ct-third-item { margin-top: 225px !important }
    .ct-social-icons { height: 43px !important }

    @media screen and (max-width: 1199px) {
        .menu-floater { display: none }
    }
</style>
<div class="menu-floater hidden-xs css-transition">
    <div class="box-whats" style="">
        <div class="col-lg-3 col-md-3 col-sm-3 ct-btn">
            <img src="<?= RAIZSITE ?>/img/spotIcon.png" class="icone-whats icon">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 div-box-content-whats ct-content">
            <div class="box-bar"></div>
            <div class="box-content" style="">
                <a href="https://open.spotify.com/user/nenomachado/playlist/4uie6iLfLLSNKbNavLMoGr" target="_blank"><img class="spot-img" src="<?= RAIZSITE ?>/img/acelere-club1.png"></a>
            </div>
        </div>
    </div>
</div>

<div class="menu-floater hidden-xs css-transition ct-first-item">
    <div class="box-whats" style="">
        <div class="col-lg-3 col-md-3 col-sm-3 ct-btn">
            <img src="<?= RAIZSITE ?>/img/whats.png" class="icone-whats icon">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 div-box-content-whats ct-content">
            <div class="box-bar"></div>
            <div class="box-content" style="">
                <p class="ct-title" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight: 600; font-size: 12px">Whatsapp</p>
                <a class="reseta-link" href="tel:99953 3155" style="font-family: 'Roboto', sans-serif"><p style="color: #ffbc1b; font-weight: 600; font-size: 25px"><font class="ct-small-height" style="color: #ffbc1b; font-size: 12px">41</font> 99953-3155</p></a>
            </div>
        </div>
    </div>
</div>

<div class="menu-floater hidden-xs css-transition ct-seccond-item">
    <div class="box-social">
        <div class="col-lg-3 col-md-3 col-sm-3 ct-btn">
            <img src="<?= RAIZSITE ?>/img/share.png" class="icone-social icon">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 div-box-content-social ct-content">
            <div class="box-bar"></div>
            <div class="box-content">
                <p class="ct-title" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight: 600; font-size: 12px">Siga-nos nas redes sociais</p>
                <a href="<?= $config->facebook ?>" target="_blank"><img src="<?= RAIZSITE ?>/img/facebook-icon.png" class="ct-social-icons"></a><a href="https://www.youtube.com/channel/UCMgijWrIdDFZQcQssR-xfAw" target="_blank"><img src="<?= RAIZSITE ?>/img/youtube-icon.png" class="ct-social-icons"></a>
            </div>
        </div>
    </div>
</div>

<div class="menu-floater hidden-xs css-transition ct-third-item">
    <div class="box-calendario">
        <div class="col-lg-3 col-md-3 col-sm-3 ct-btn">
            <img src="<?= RAIZSITE ?>/img/calendar-icon.png" class="icone-calendario icon">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 div-box-content-calendario ct-content">
            <div class="box-bar"></div>
            <div class="box-content">
                <p class="ct-title" style="font-family: 'Roboto', sans-serif; color: #ffbc1b; font-weight: 600; font-size: 25px">EVENTOS</p>
                <p class="ct-title" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight: 600; font-size: 12px">Confira a agenda</p>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
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

        .session-navbar.sticky { display: block; position: fixed !important; z-index: 9; left: 50%; -ms-transform: translateX(-50%); -webkit-transform: translateX(-50%); -moz-transform: translateX(-50%); -o-transform: translateX(-50%); transform: translateX(-50%) }

        .row-links { display: block !important }

        .session-navbar img { position: absolute; top: 50%; -ms-transform: translateY(-50%); -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%); -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }

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

        .row-pesquisa { -webkit-transition: all 0.5s ease-out; transition: all 0.5s ease-out }
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

    @media screen and (max-width: 767px) {
        .bloco-links { display: block; text-align: center }
        .bloco-links .navbar-nav>li>a { font-size: 18px; padding-top: 15px; padding-bottom: 15px; color: #f9a61a }
        .bloco-links .nav>li>a:focus,
        .bloco-links .nav>li>a:hover,
        .bloco-links .nav>li>a:focus:hover { background-color: transparent !important }
        .bloco-links .nav .Border:first-child { border-top: 1px solid #f9a61a }
        .bloco-links .nav .Border { border-bottom: 1px solid #f9a61a }
        .bloco-links .nav .Border:last-child { border-bottom: 1px solid transparent }

        .session-navbar img { margin-top: 15px; margin-bottom: 15px; display: inherit; height: 80px }

        .menu-itens { position: relative }
        .row-links { -webkit-transition: .25s ease-in-out; -moz-transition: .25s ease-in-out; -o-transition: .25s ease-in-out; transition: .25s ease-in-out }

        .navbar-nav { margin: 0 !important }

        #nav-icon1, #nav-icon2, #nav-icon3, #nav-icon4 {
            width: 60px;
            height: 45px;
            position: absolute;
            right: 0;
            top: 45px;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer;
        }

        #nav-icon1 span, #nav-icon3 span, #nav-icon4 span {
            display: block;
            position: absolute;
            height: 5px;
            width: 40px;
            background: #e1d1aa;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            -moz-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
        }

        #nav-icon1 span:nth-child(1) {
            top: 0px;
        }

        #nav-icon1 span:nth-child(2) {
            top: 11px;
        }

        #nav-icon1 span:nth-child(3) {
            top: 22px;
        }

        #nav-icon1.open span:nth-child(1) {
            top: 14px;
            -webkit-transform: rotate(135deg);
            -moz-transform: rotate(135deg);
            -o-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        #nav-icon1.open span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }

        #nav-icon1.open span:nth-child(3) {
            top: 14px;
            -webkit-transform: rotate(-135deg);
            -moz-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }
    }
</style>

<div class="container session-navbar" style="background-color: #0c0c0c; position: relative">
    <div class="bar">
    	<div class="menu-itens">
            <a href="<?= RAIZSITE ?>">
                <img src="<?= RAIZSITE ?>/img/marcacao-rodape-1.png" class="img-responsive">
            </a>

            <div class="hidden-lg hidden-md hidden-sm" id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="row row-pesquisa hidden-xs">
    		<div class="col-lg-3 col-md-3 col-sm-3">&nbsp;</div>
    		<div class="col-lg-6 col-md-6 col-sm-9 bloco-pesquisa">
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
    		<div class="col-lg-6 col-md-6 col-sm-9 col-xs-12 bloco-links padding-zero">
    			<ul class="nav navbar-nav">
                    <li class="Border"><a href="">A Club</a></li>
                    <li class="Border"><a href="">Motos</a></li>
                    <li class="Border"><a href="">Eventos</a></li>
                    <li class="Border"><a href="">Notícias</a></li>
                    <li class="Border"><a href="#">Loja</a></li>
                    <li class="Border"><a href="">Contato</a></li>
                    <li class="hidden-xs"><div class="divisoria"></div></li>
                    <li class="Border"><a href="">Ofertas</a></li>
                </ul>
    		</div>
    		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">&nbsp;</div>
    	</div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".row-links").hide();

        $('#nav-icon1').click(function(){
            if($(".row-links").is(':visible')) {
                $(this).removeClass('open');
                $(".row-links").hide();
            } else {
                $(".row-links").show();
                $(this).addClass('open');
            }
        });
    });

    var w = window.innerWidth;
    if(w > 768) {
        $(document).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $(".session-navbar").addClass("sticky");
                $(".row-pesquisa").css({"opacity":"0", "margin-top":"-80px"});
                $(".menu-itens img").css({"opacity":"0", "height":"0"});
            } else {
                $(".menu-itens img").css({"height":"auto", "opacity":"1"});
                $(".row-pesquisa").css({"opacity":"1", "margin-top":"0px"});
                $(".session-navbar").removeClass("sticky");
            }
        });
    }
</script>
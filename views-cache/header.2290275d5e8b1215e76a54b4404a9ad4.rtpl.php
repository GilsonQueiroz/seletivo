<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang = "pt-br">

<!-- Mirrored from www.rondondopara.pa.gov.br/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 23:02:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Processo Seletivo - Prefeitura Municipal de Rondon do Pará</title>
	<meta charset="utf-8">
		
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="content-style-type" content="text/css"/>
	<meta http-equiv="content-script-type" content="text/javascript"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="Prefeitura Municipal de Rondon do Pará"/>
	<meta name="keywords" content="Rondon do Pará Processo Seletivo"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="AUTHOR" content="Gilson Queiroz">
	<meta name="reply-to" content="gilsontq@yahoo.com">
	<meta name="URL" content="https://www.rondondopara.pa.gov.br/">
	<meta name="robots" content="index, follow, all">
	<meta name="msnbot" content="all">
	<meta name="googlebot" content="index, follow">
	<link rel="stylesheet" href="res/site/css/animated.css">
	<link rel="stylesheet" href="res/site/css/jp.min.css">
	<link rel="stylesheet" href="res/site/css/menu.css">
	<link rel="stylesheet" href="res/site/css/style.css">
	<link rel="stylesheet" type="text/css" href="res/site/plugins/font-awesome/css/font-awesome.min.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Lato:100,200,300,300i,400,400i,500,700,700i,900|Marcellus|Bad+Script:Normal%20400|Open+Sans:300,300i,400,400i,600,600i,700,700i|Quattrocento+Sans:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" href="res/site/imagens/favicon.png" type="image/png" media="screen">
	<script type='text/javascript'><!-- window.status=document.title;//--></script>
	<script src="res/site/plugins/js/jquery.min.js"></script>
	<script src="res/site/plugins/js/ScrollToPlugin.min_.js"></script>
</head>

<body>
	<link rel="stylesheet" href="res/site/plugins/modal/bs-modal.css">
	<script src="res/site/plugins/modal/bs-modal.js"></script>
	<style>
		.modal .fa-time {font-size:50px;}
		.modal-body {position: relative; padding:0px;}
		.modal-content hr {margin-top:5px; margin-bottom:15px; border-top: 1px solid #000; border-bottom: 1px solid #434b5a;}
		.modal-content h1 {font-size: 180%; line-height: 1; font-weight: 400; color:#d3d4d5;}
		.modal-content h4 {font-size: 95%; color:#d3d4d5; line-height: 150%; font-weight: 400;}
		.modal-content h3 {font-size: 130%; color:#d3d4d5; padding:10px 0 0; line-height:130%; font-weight: 400;}
		.modal-content {position: relative; background-color: #283142; border: 1px solid #999999; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 6px; -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); -webkit-background-clip: padding-box; background-clip: padding-box; outline: 0;}
		@media (min-width: 900px) {
		  .modal-dialog {width: 900px; margin: 30px auto;}
		  .modal-content {-webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);}
		  }
		@media (min-width: 414px) {.modal-lg {width: 900px;}}	
	</style>

	<script>
		$(window).load(function() {
		/**/ // COOKIES
			function cCookie(name,value,time) {
				if (time > 0) {
					time = time*1000
					var date = new Date();
					date.setTime(date.getTime()+(time));
					var expires = "; expires="+date.toGMTString();
				}
				else var expires = "";
				document.cookie = name+"="+value+expires+"; path=/";
			}
			// Deletar Cookie
			function dCookie(name) {
				cCookie(name,"",-1);
			}
			function startPopups() {
				$('[popup]').each(function(){
					$('[popup]').modal()
					cCookie('popup77', 'true', 0);
					cCookie('popup-intervalo', 'true', 60);
				})
			}
			setTimeout(function(){ startPopups(); }, 2000); // *1000
			$('[popup]').on('shown.bs.modal', function(){
				var action = $(this).attr('action')
				var ID = $(this).attr('contar')
				$.ajax({
					type: "POST",
					dataType: "json",
					url: action,
					data: 'acao=contar&ID='+ID,
					success: function( data ) {
					},
				});
			})
		})
	</script>
<div>
	<style>
		#header 		{display:block; position:fixed; width:100%; z-index:999; margin:0 auto; -webkit-transition:300ms all ease-in-out; -moz-transition:300ms all ease-in-out; -ms-transition:300ms all ease-in-out; -o-transition:300ms all ease-in-out;}
		.header-close 	{transform:translateY(-100px); opacity:1; -moz-transform: translateY(-100px); -ms-transform: translateY(-100px); -webkit-transform: translateY(-100px)}
		.header-min 	{min-height:100px;}
		.header-topo  	{background:#fff; max-width:100%; height:45px; border-bottom:#fff 1px solid; margin: 0 auto}
		.header-bottom 	{height:60px; background: url('res/site/imagens/bg_menu.jpg') no-repeat center center; background-size:auto,cover}
		.header-menu  	{float:left}
		.header .sociais{float:right; padding-top:5px}
		@media screen and (max-width:610px){.header-close{transform:translateY(-180px); opacity:1; -moz-transform: translateY(-180px); -ms-transform: translateY(-180px); -webkit-transform: translateY(-180px)}}	
		@media screen and (max-width:414px){.header h5 {line-height:90%}.header h3{font-size:110%; line-height:150%}}	
	</style>

	<div class="header">
		<div id="header" class="header-min">
				<div style="background:#023e29; height:5px"></div>
				<div id="entidade">
					<div class="content">
						<style>
						.entidade-logo 	{float:left}
						.entidade h3	{color:#fff; font-size:140%; letter-spacing:0.0em; line-height:110%}
						.entidade h5	{color:#fff; font-size:90%; margin-top:10px; line-height:100%; letter-spacing:0.05em}
						.entidade .box-2{width:50%; height:90px; padding:17px 0;  float:left; margin-bottom:0px}
						@media screen and (max-width:780px){.entidade h3{font-size:130%;}.entidade h5{font-size:80%}} 	
						@media screen and (max-width:680px){.entidade .box-2{width:100%; height:90px}.entidade h3{font-size:130%;}.entidade h5{font-size:80%}}
						</style>

						<div class="entidade">
							<div class="box-2">
								<a href="https://www.rondondopara.pa.gov.br/web/">
									<span class="entidade-logo">
										<img src="res/site/imagens/brasao-max.png" title="Página principal" alt="Logo">
									</span>
									<span class="entidade-txt">
										<h5>Prefeitura Municipal</h5>
										<h3>Rondon do Pará / PA</h3>
									</span> 
								</a>
							</div>
							<div class="box-2">
								<!--<a href="//transparencia.rondondopara.pa.gov.br">-->
								<a href="http://transparencia.rondondopara.pa.gov.br/">
									<span class="entidade-logo">
										<img src="res/site/imagens/icon-trans-128.png" title="Portal da Transparência" alt="Logo">
									</span>
									<span class="entidade-txt">
										<h5>Acesso à Informação</h5>
										<h3>Portal da Transparência</h3>
									</span>
						        </a>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>	
				<div class="header-bottom">
					<div class="wrap">
						<div class="header-menu"><nav id='nav'>
							<div id="head-mobile"></div>
							<div class="button"></div>
							<ul>

							<li><a href="https://www.rondondopara.pa.gov.br/web/">PREFEITURA</a></li>

							<li><a href="#">SISTEMA</a> 
									<ul>
										<li><a href="#"><i class="fa fa-caret-right mr5"></i>Sobre</a></li>
										<li><a href="#"><i class="fa fa-caret-right mr5"></i>Legislação</a></li>
									</ul>
							</li>
							
							<li><a href="#">EDITAIS</a> 
									<ul>
										<li><a href="/editais_publicados"><i class="fa fa-caret-right mr5"></i>Todos</a></li>
										<li><a href="/editais_abertos"><i class="fa fa-caret-right mr5"></i>Abertos</a></li>
										<li><a href="/editais_encerrados"><i class="fa fa-caret-right mr5"></i>Encerrados</a></li>
									</ul>
							</li>
							
							<li><a href="#">CANDIDATO</a> 
									<ul>
										<li><a href="index.html"><i class="fa fa-caret-right mr5"></i>Meus dados</a></li>
										<li><a href="index.html"><i class="fa fa-caret-right mr5"></i>Minhas inscrições</a></li>
									</ul>
							</li>
							
							<li><a href="#">ACESSAR</a></li>
							</ul>
							</nav>
							<script>
							    (function($)
							    	{
							    		$.fn.menumaker = function(options) 
										{
									    	var nav = $(this), settings = $.extend({format: "dropdown", sticky: false}, options);
									    	return this.each
									    	(function() 
									    		{
									        		$(this).find(".button").on('click', function()
									        		{
										        		$(this).toggleClass('menu-opened');
										        		var mainmenu = $(this).next('ul');
										        		if (mainmenu.hasClass('open')) 
										        		{
										        			mainmenu.slideToggle().removeClass('open');
													    }
										    			else 
										    			{
										    				mainmenu.slideToggle().addClass('open');
										    				if (settings.format === "dropdown") 
										    				{
										    					mainmenu.find('ul').show();
															}
														}
													}
													);
								
													nav.find('li ul').parent().addClass('has-sub');
													multiTg = function() 
													{
														nav.find(".has-sub").prepend('<span class="submenu-button"></span>');
														nav.find('.submenu-button').on
														('click', function() 
															{
																$(this).toggleClass('submenu-opened');
																if ($(this).siblings('ul').hasClass('open')) 
																{
																	$(this).siblings('ul').removeClass('open').slideToggle();
																}	
																else 
																{
																	$(this).siblings('ul').addClass('open').slideToggle();
																}
															}
														);
													};
													if (settings.format === 'multitoggle') multiTg();
												}
											);
									    };
									}
								)
								(jQuery);
								(function($)
									{
										$(document).ready(function()
											{
												$("#nav").menumaker({format: "multitoggle"});
											}
										);
									}
								)
								(jQuery);
							</script>
						</div>
						<div class="header sociais">
							<style>
							.sociais button      {background:transparent; border:0; cursor:pointer; font-family:inherit; 
							            line-height: inherit; margin: 0; outline: none; padding: 0; text-transform: none; -webkit-appearance: button;}
							.sociais button::-moz-focus-inner {border: 0; padding: 0;}
							.sociais fieldset    {border: 0; margin: 0; padding: 0;}
							.sociais input       {border: 0; font-family: inherit; font-size: 100%; line-height: inherit; margin: 0; outline: 0; padding: 0;}
							.sociais input:focus {outline: none;}
							.sociais input[type="search"] {-webkit-appearance: textfield; box-sizing: content-box;}
							.sociais input[type="search"]::-webkit-search-cancel-button,
							.sociais input[type="search"]::-webkit-search-decoration {-webkit-appearance: none;}
							.sociais input::-moz-focus-inner {border: 0; padding: 0;}
							.sociais ul          {list-style: none; margin: 0; padding: 0;}
							.sociais 	 {width:}
							.sociais  	{color: #fff;}
							.sociais  li {float:left;}
							.sociais  li:first-child a {border-radius: 7px;}
							.sociais  li:last-child button {border-radius: 7px;}
							.sociais  a,
							.sociais  input[type="search"],
							.sociais  button {background:transparent; color: #fff; display: block; padding:6px 6px; position: relative;}
							.sociais  a:hover,
							.sociais  input[type="search"]:hover,
							.sociais  input[type="search"]:focus,
							.sociais  button:hover {background:rgba(255,255,255,0.4); border-radius:7px}
							.sociais  input[type="search"]::-webkit-input-placeholder {color: #fff;}
							.sociais  input[type="search"]::-moz-placeholder {color: #fff; opacity: 1;}
							.sociais  input[type="search"]:-moz-placeholder {color: #fff; opacity: 1;}
							.sociais  input[type="search"]:-ms-input-placeholder {color: #fff;}
							.sociais  input[type="search"] {height:25px; width: 130px; display: none;}
							.sociais  li i {font-size:25px; color:#fff}/* cor do icones todos */
							@media screen and (max-width:){.sociais  input[type="search"]{height:19px;width:130px;}}
							</style>	
							<div class="sociais">
								<form action="https://www.rondondopara.pa.gov.br/web/pag.php?pg=busca" id="formularioBuscar" method="get">
								<fieldset>
									<ul class="toolbar clearfix">
										<li class="cleanToggle"><a href="/" title="Home"><i class="fa fa-home"></i></a></li>
										<li class="cleanToggle"><a href="admin" title="Admin"><i class="fa fa-cog"></i></a></li>
									</ul>
								</fieldset>
								</form>
							</div> <!-- end container -->
							<script>
							( function() 
								{
									$('#btn-search').on('click', function(e) 
										{
											e.preventDefault();
											if($('#search').val() != "")
											{
												$("#formularioBuscar").submit();
											}
											if($('#search').is(":visible"))
											{
												$(".cleanToggle").animate({width: 'show'});
											} 
											else 
											{
												$(".cleanToggle").animate({width: 'hide'});
											}
												$('#search').animate({width: 'toggle'}).focus();
										}
									);
								} 
								() 
							);

							function submitenter(myfield,e){
							var keycode;
							if (window.event) keycode = window.event.keyCode;
							else if (e) keycode = e.which;
							else return true;
							if (keycode == 13)
							{myfield.form.submit();return false;}
							else
							return true;
							}
							</script>
						</div>
					</div>
				</div>
		</div>	
	</div>

	<script>
	$(document).ready(function() {var lastScrollTop = 0;
	$(document).scroll(function(){
		var stop = $(this).scrollTop();
		if (stop > lastScrollTop){
		if ($('#header').hasClass('header-min')){
			$('#header').addClass('header-close').removeClass('header-min');}} 
		else if  (stop <=270){
		if ($('#header').hasClass('header-close')){
			$('#header').addClass('header-min').removeClass('header-close');
		}} 
		lastScrollTop = stop;});});
	</script>
</div>
<div class="space"></div>

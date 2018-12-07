<?php if(!class_exists('Rain\Tpl')){exit;}?><head>
<link rel="stylesheet" href="res/site/plugins/carousel/css/carousel.css" type="text/css" media="screen" />
<style>
.img0 { background:url("res/site/imagens/bg_home_cadastro.jpg") no-repeat center center; background-size:cover; width:100%; min-height:600px}
.img1 { background:url("res/site/imagens/bg_home_seletivo.jpg") no-repeat center center; background-size:cover; width:100%; min-height:600px}
</style>
</head>

<div class="main-container">
	<div id="carousel-example-generic" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
						  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
					</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active carousel-block img0">
				<div class="block">
					<div class="carousel-block center">
						<span><h1 class="animated fadeInDown center">Já está cadastrado?</h1></span>
						<span><h2 style="width:80%" class="animated fadeInUp center">Cadastre-se para poder participar do processo seletivo</h2></span>
						<p class="animated fadeInRight carousel-btn"><a href="#" class="btn btn-transparent btn-rounded btn-large">Cadastre-se</a></p>					
					</div>
				</div>
			</div>
			<div class="item  carousel-block img1">
				<div class="block">
					<div class="carousel-block center">
						<span><h1 class="animated fadeInDown center">Processo Seletivo</h1></span>
						<span><h2 style="width:80%" class="animated fadeInUp center">Editais abertos - Participe</h2></span>
						<p class="animated fadeInRight carousel-btn"><a href="#" class="btn btn-transparent btn-rounded btn-large">Participe</a></p>					
					</div>
				</div>
			</div>
		</div><!-- /.carousel-inner -->

			<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
		</a>
	</div>
</div>

<script async defer src="res/site/plugins/js/jquery.min.js"></script>
<script async defer src='res/site/plugins/js/bootstrap.min.js'></script>
<script async defer src="res/site/plugins/carousel/js/index.js"></script>
</div>
<div id="servicos">
	<div class="content">
		<style>
			.block-icon .block-full {height:110px; border:solid 1px #fff; box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3); border-radius:20px; color:#555;background: linear-gradient(#f0f1f1, #e4e4e4, #c7c6c7); margin:0 auto; overflow: hidden; position: relative; cursor:pointer;}
			.block-icon .block-full:hover {transition: all .4s ease; background: linear-gradient(#c7c6c7, #e4e4e4, #f0f1f1);}
			.block-icon .bg {width:100%; text-align:center; padding-top:0px; margin:5px 0; position:absolute;}
			.block-icon h4 {font-size:75%; line-height:105%; color:#000; text-align:center; padding:0px 5px; font-weight:700;}
			.block-icon h5 {font-size:80%; line-height:105%; color:#000; text-align:center; padding:5px 10px 0 10px; font-weight: 400;}
			.block-icon .col-8{width: 11.50%; float:left; margin:3%}
			@media screen and (max-width: 990px){.block-icon .col-8{width: 15.66%; float:left; margin:0.5%}}
			@media screen and (max-width: 800px){.block-icon .col-8{width: 18.00%; float:left; margin:1.0%}}
			@media screen and (max-width: 768px){.block-icon .col-8{width: 23.00%; float:left; margin:1.0%}}
			@media screen and (max-width: 600px){.block-icon .col-8{width: 23.00%; float:left; margin:1.0%}}
			@media screen and (max-width: 540px){.block-icon .col-8{width: 31.33%; float:left; margin:1.0%}}
			@media screen and (max-width: 480px){.block-icon .col-8{width: 48.00%; float:left; margin:1.0%}}
		</style>
		<div>
		<div class="block-icon">
			<div class="col-8">
				<div class="block-full">
					<div class="bg">
						<div>
							<a href=javascript:abreJanela('http://diariomunicipal.com.br/famep/pesquisar')>
								<center><img src="res/site/imagens/icon-open.png"></center>
								<h4>EDITAIS <br> Abertos</h4>
							</a>
						</div>	
					</div>	
				</div>	
			</div>

			<div class="col-8">
				<div class="block-full">
					<div class="bg">
						<div>
							<a href=javascript:abreJanela('http://diariomunicipal.com.br/famep/pesquisar')>
								<center><img src="res/site/imagens/icon-close.png"></center>
								<h4>EDITAIS <br> Encerrados</h4>
							</a>
						</div>	
					</div>	
				</div>	
			</div>

			<div class="col-8">
				<div class="block-full">
					<div class="bg">
						<div>
							<a href=javascript:abreJanela('https://sistema.ouvidorias.gov.br/publico/PA/RondonDoPara/Manifestacao/RegistrarManifestacao')>
								<center><img src="res/site/imagens/icon-results.png"></center>
								<h4>Meus <br> RESULTADOS</h4>
							</a>
						</div>	
					</div>	
				</div>	
			</div>

			<div class="col-8">
				<div class="block-full">
					<div class="bg">
						<div>
							<a href=javascript:abreJanela('http://www.drhtransparencia.com.br/login.php?un=f9470a9c5982e834a183a0b97322afdf')>
								<center><img src="res/site/imagens/icon-profile.png"></center>
								<h4>Meus <br> DADOS</h4>
							</a>
						</div>
					</div>	
				</div>	
			</div>		

			<div class="col-8">
				<div class="block-full">
					<div class="bg">
						<div>
							<a href="http://transparencia.rondondopara.pa.gov.br/transparencia?ent=1&amp;grupo=institucional&amp;secao=agendaoficial&amp;ano=2018">
								<center><img src="res/site/imagens/icon-about.png"></center>
								<h4>SOBRE</h4>
							</a>
						</div>	
					</div>	
				</div>	
			</div>
		</div>		
		</div>
	<div class="clear"></div>
	<script src="res/site/plugins/js/janela.js" type="text/javascript"></script>
	</div>
</div>

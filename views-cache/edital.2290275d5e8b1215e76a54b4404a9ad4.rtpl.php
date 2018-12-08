<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<div class="bg-pag">	
		<div class="content box">
	
		<head><title>Editais Abertos</title></head>
		<meta property="og:image" content="/res/site/imagens/bg_home_seletivo.jpg"/>

			<div>
				<div class="navigation">
					<a class=" mr5" href="/">Home</a><i class="fa fa-angle-double-right mr5"></i>
					<a class=" mr5" href="#">Categoria</a><i class="fa fa-angle-double-right mr5"></i>
					<!--O combate ao Aedes Aegypti continua-->
					<span>Edital aberto</span>
					<a class="fright" href="javascript:history.go(-1)"><i class="btn fa fa-angle-double-left"></i> Voltar</a>
				</div>

				<div class="views">
					<div class="view">
						<div class="clear"></div>
						<hr class="hr40"/>

						<h1 align="left" style="font-size:250%; font-weight:700;">Editais Abertos</h1>
						<br>
						<div>
							<div class="col-2-3-2-emax">
								<div align="left">
									<div class="clearfix"></div>
									<h3 align="left"><i><b>""Dengue, zika e chikungunya: os três vírus circulam ao mesmo tempo pelo Brasil, colocando em risco a saúde da população. O que essas doenças têm em comum? O mesmo vetor, o mosquito Aedes aegypti."
									"</b></i></h3>
									<br>
									<h6>Campanhas, publicado em 02/01/2017</h6>
									<div style="margin:10px 0">
										<div class="exibeImagem" style="width:100%;">
											<img rel="image_src" src="/res/site/imagens/bg_home_seletivo.jpg">
											<h6></h6>
										</div>
									</div>

									<div style="clear:both"></div>
									<div style="text-align:justify; padding-top:15px">
										<div>
											Paragrafo 1
										</div>
										<div>&nbsp;</div>
										<div>
											Paragrafo 2
										</div>
										<div>&nbsp;</div>
										<div>
											Paragrafo 3
										</div>
										<div>&nbsp;</div>
										<div>
											<span style="font-size:20px;"><strong>Subtítulos</strong></span>
										</div>
										<div>
											Paragrafo 4
										</div><br />
										<div>&nbsp;</div>
										<br/><br/>
									</div>
									<!-- abas -->
									<!-- abas -->
									<div class="tab"></div>
									<br/>
									<div style="padding:15px 0" class="addthis_native_toolbox"></div>	
									<br/>
								</div>	
							</div>	
							<div class="aside col-2-3-1-dmin">
								<div class="box-wrap">
									<div class="tta">Procurar por Cargo</div>
									<div class="ttb"></div>
							    	<?php require $this->checkTemplate("cargo-menu");?>
								</div>
								<div class="clear"></div>
								<br>
							</div>
							<div class="clear"></div>
						</div>
					</div>	
					<!-- abas -->
						<script>
						document.getElementById("defaultOpen").click();
						function openAbas(evt, abasName) {
					    var i, tabcontent, tablinks;
					    tabcontent = document.getElementsByClassName("tabcontent");
					    for (i = 0; i < tabcontent.length; i++) 
					    	{tabcontent[i].style.display = "none";}
					    tablinks = document.getElementsByClassName("tablinks");
					    for (i = 0; i < tablinks.length; i++) 
					    	{tablinks[i].className = tablinks[i].className.replace(" active", "");}
					    document.getElementById(abasName).style.display = "block";
					    evt.currentTarget.className += " active";
						}
						</script>
				</div>
				<script src="/res/site/plugins/js/janela.js" type="text/javascript"></script>
			</div>
		</div>	
	</div>
</div>
<div class="clear"></div>

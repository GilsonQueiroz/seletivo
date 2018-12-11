<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<div class="bg-pag">	
		<div class="content box">
	
		<head><title>Editais Abertos</title></head>
			<div>
				<div class="navigation">
					<a class=" mr5" href="/">Home</a><i class="fa fa-angle-double-right mr5"></i>
					<a class=" mr5" href="/editalaberto">Editais Abertos</a><i class="fa fa-angle-double-right mr5"></i>
					<span><?php echo htmlspecialchars( $cargo["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
					<a class="fright" href="javascript:history.go(-1)"><i class="btn fa fa-angle-double-left"></i> Voltar</a>
				</div>

				<div class="views">
					<div class="view">
						<div class="clear"></div>
						<hr class="hr40"/>

						<h1 align="left" style="font-size:250%; font-weight:700;">Editais Abertos - <?php echo htmlspecialchars( $cargo["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
						<br>
						<div>
							<div class="col-2-3-2-emax">
								<div align="left">
									<?php $counter1=-1;  if( isset($edital) && ( is_array($edital) || $edital instanceof Traversable ) && sizeof($edital) ) foreach( $edital as $key1 => $value1 ){ $counter1++; ?>
									<div class="box">
										<div class="clearfix"></div>
										<h3 align="left"><i><b>"Edital 000/2018
										"</b></i></h3>
										<br>
										<h6>Campanhas, publicado em 02/01/2017</h6>
										<div style="clear:both"></div>
										<div style="text-align:justify; padding-top:15px">
											<div>
												Cargos
											</div>
											<div>&nbsp;</div>
											<div>
												Descrição
											</div>
											<div>&nbsp;</div>
											<br/><br/>
										</div>
									</div>
									<?php } ?>


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
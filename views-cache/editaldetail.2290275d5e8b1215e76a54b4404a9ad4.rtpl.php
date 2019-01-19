<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<div class="bg-pag">	
		<div class="content box">
	
		<head><title>Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>: <?php echo htmlspecialchars( $edital["desedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></title></head>
			<div>
				<div class="navigation">
					<a class=" mr5" href="/">Home</a><i class="fa fa-angle-double-right mr5"></i>
					<span>Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
					<a class="fright" href="javascript:history.go(-1)"><i class="btn fa fa-angle-double-left"></i> Voltar</a>
				</div>

				<div class="views">
					<div class="view">
						<div class="clear"></div>
						<hr class="hr40"/>

						<h1 align="left" style="font-size:250%; font-weight:700;">Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>: <?php echo htmlspecialchars( $edital["desedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
						<br>
						<div>
							<div class="col-2-3-2-emax">
								<div align="left">
									<div class="box">
										<div class="clearfix"></div>
										<h6><?php echo htmlspecialchars( $edital["desfase"], ENT_COMPAT, 'UTF-8', FALSE ); ?> em <?php echo htmlspecialchars( $edital["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
										<div style="clear:both"></div>
										<div style="text-align:justify; padding-top:15px">
											<div>
												<?php echo htmlspecialchars( $edital["deslongo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
											</div>
											<div>&nbsp;</div><hr>
											<div>
												Cargos:
											</div>
											<div>&nbsp;</div>
											<?php $counter1=-1;  if( isset($cargos) && ( is_array($cargos) || $cargos instanceof Traversable ) && sizeof($cargos) ) foreach( $cargos as $key1 => $value1 ){ $counter1++; ?>
												<li><ins><a href="/cargo_<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></ins> (Vagas: <?php echo htmlspecialchars( $value1["nrvacancy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, CR: <?php echo htmlspecialchars( $value1["nrcadreserva"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</li>
											<?php } ?>
											<div>&nbsp;</div>

											<br/><br/>
											<div class="btn">
												<a href="/participa_<?php echo htmlspecialchars( $edital["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"> Participar <i class="fa fa fa-arrow-right m110"></i></a>
											</div>

										</div>
									</div>
									<br/>

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
									<div class="tta">Arquivos</div>
									<div class="ttb"></div>
									<?php $counter1=-1;  if( isset($files) && ( is_array($files) || $files instanceof Traversable ) && sizeof($files) ) foreach( $files as $key1 => $value1 ){ $counter1++; ?>
							    	<li><a href="/res/site/pdf/<?php echo htmlspecialchars( $value1["desnamefile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo htmlspecialchars( $value1["destitle"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li><hr>
									<?php } ?>
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

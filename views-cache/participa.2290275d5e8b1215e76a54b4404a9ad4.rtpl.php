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

						<h1 align="left" style="font-size:250%; font-weight:700;">Incrição no Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>: <?php echo htmlspecialchars( $edital["desedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
						<br>
						<div>
							<div class="col-2-3-2-emax">
								<div align="left">
									<div class="box">
										<div class="clearfix"></div>
										<div style="clear:both"></div>
										<div style="text-align:justify; padding-top:15px">
											<div>
												Cargos Disponíveis:
											</div>
											<div>&nbsp;</div>
											<?php $counter1=-1;  if( isset($cargos) && ( is_array($cargos) || $cargos instanceof Traversable ) && sizeof($cargos) ) foreach( $cargos as $key1 => $value1 ){ $counter1++; ?>

												<li><?php echo htmlspecialchars( $value1["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?> (Vagas: <?php echo htmlspecialchars( $value1["nrvacancy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, CR: <?php echo htmlspecialchars( $value1["nrcadreserva"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</li>
											<?php } ?>

											<div>&nbsp;</div><hr>
											<li>Escolha o cargo para participar do processo seletivo: </li>
											<div>&nbsp;</div>
											<p>
											  <select id=cbCargo>
											    <?php $counter1=-1;  if( isset($cargos) && ( is_array($cargos) || $cargos instanceof Traversable ) && sizeof($cargos) ) foreach( $cargos as $key1 => $value1 ){ $counter1++; ?>

													<option value=<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>><?php echo htmlspecialchars( $value1["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
												<?php } ?>

											  </select>
											</p>

											<br/><br/>
											<div class="btn">
												<a href="#"> Continuar <i class="fa fa fa-arrow-right m110"></i></a>
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


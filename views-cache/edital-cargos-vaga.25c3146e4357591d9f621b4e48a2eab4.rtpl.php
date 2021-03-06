<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Adicionando Vaga
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/edital/vagas">Vagas</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Vagas</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/vagas/<?php echo htmlspecialchars( $cargo["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="descodedital">Edital</label>
              <input type="text" class="form-control" readonly="readonly" id="descodedital" name="descodedital" value="<?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="descargo">Cargo</label>
              <input type="text" class="form-control" readonly="readonly" id="descargo" name="descargo" value="<?php echo htmlspecialchars( $cargo["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="vacancy">Quantidade de vagas</label>
              <input type="number" step=1 class="form-control" id="vacancy" name="vacancy" value="1">
            </div>
          <div class="box-body">
            <div class="form-group">
              <label for="cadreserva">Quantidade Cadastro de Reserva</label>
              <input type="number" step=1 class="form-control" id="cadreserva" name="cadreserva" value="1">
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="analise">Qtd para Analise</label>
              <input type="number" step=1 class="form-control" id="analise" name="analise" value="1">
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="enterview">Qtd para Entrevista</label>
              <input type="number" step=1 class="form-control" id="enterview" name="enterview" value="1">
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Confirmar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
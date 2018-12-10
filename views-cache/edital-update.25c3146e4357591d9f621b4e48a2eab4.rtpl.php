<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Editais
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Edital</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="descodedital">Código do Edital</label>
              <input type="text" class="form-control" id="descodedital" name="descodedital" placeholder="Digite o código do Edital" Value="<?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desedital">Nome do Edital</label>
              <input type="text" class="form-control" id="desedital" name="desedital" placeholder="Digite o nome da Edital" Value="<?php echo htmlspecialchars( $edital["desedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desresumo">Resumo do Edital</label>
              <input type="text" class="form-control" id="desresumo" name="desresumo" placeholder="Digite um resumo do Edital" Value="<?php echo htmlspecialchars( $edital["desresumo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="file">PDF do edital</label>
              <input type="file" class="form-control" id="fileUpload" name="fileUpload">
              <label for="file">Arquivo atual: </label><input readonly="readonly" Value="<?php echo htmlspecialchars( $edital["desfile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Editais
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/edital">Editais</a></li>
    <li class="active"><a href="/admin/edital/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Edital</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/edital/create" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="descodedital">Código do Edital</label>
              <input type="text" class="form-control" id="descodedital" name="descodedital" placeholder="Digite o código do Edital">
            </div>
            <div class="form-group">
              <label for="desedital">Nome do Edital</label>
              <input type="text" class="form-control" id="desedital" name="desedital" placeholder="Digite o nome da Edital">
            </div>
            <div class="form-group">
              <label for="desresumo">Resumo do Edital</label>
              <input type="text" class="form-control" id="desresumo" name="desresumo" placeholder="Digite um resumo do Edital">
            </div>
            <div class="form-group">
                 <label for="file">PDF do Edital</label>
                 <input type="file" class="form-control" id="fileUpload" name="fileUpload">              
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
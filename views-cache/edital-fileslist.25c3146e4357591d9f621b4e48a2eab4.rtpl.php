<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Arquivos - Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>: <?php echo htmlspecialchars( $edital["desedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?> 
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href="/admin/edital/files">Edital - Arquivo</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            
            <div class="box-header">
              <a href="/admin/edital_files/add/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-success">Incluir Arquivo</a>
            </div>

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Título</th>
                    <th>Nome do Arquivo</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $counter1=-1;  if( isset($docfiles) && ( is_array($docfiles) || $docfiles instanceof Traversable ) && sizeof($docfiles) ) foreach( $docfiles as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["idfile"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["destitle"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desnamefile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>.pdf</td>
                    <td>
                      <a href="/admin/edital_files/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete/<?php echo htmlspecialchars( $value1["idfile"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este Arquivo?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
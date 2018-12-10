<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Vagas do Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/edital">Editais</a></li>
    <li><a href="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
    <li class="active"><a href="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/cargo">Cargos</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Todos os Cargos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome do Cargo</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($cargosNotRelated) && ( is_array($cargosNotRelated) || $cargosNotRelated instanceof Traversable ) && sizeof($cargosNotRelated) ) foreach( $cargosNotRelated as $key1 => $value1 ){ $counter1++; ?>

                            <tr>
                            <td><?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <a href="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/cargo/<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-right"></i> Adicionar</a>
                            </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title">Vagas no Edital <?php echo htmlspecialchars( $edital["descodedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome do Cargo</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($cargosRelated) && ( is_array($cargosRelated) || $cargosRelated instanceof Traversable ) && sizeof($cargosRelated) ) foreach( $cargosRelated as $key1 => $value1 ){ $counter1++; ?>

                            <tr>
                            <td><?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <a href="/admin/edital/<?php echo htmlspecialchars( $edital["idedital"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/cargo/<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove" class="btn btn-danger btn-xs pull-right"><i class="fa fa-arrow-left"></i> Remover</a>
                            </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
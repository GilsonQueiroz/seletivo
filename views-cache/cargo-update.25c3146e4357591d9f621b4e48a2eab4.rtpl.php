<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Funções
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar função</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/cargo/<?php echo htmlspecialchars( $cargo["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="descargo">Nome da função</label>
              <input type="text" class="form-control" id="descargo" name="descargo" placeholder="Digite o nome da função" value="<?php echo htmlspecialchars( $cargo["descargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="nrgraduation">Grau de escolaridade</label>
              <input type="text" class="form-control" id="nrgraduation" name="nrgraduation" placeholder="Digite o grau de escolaridade (1 - Analfabeto; 2 - Nível Fundamental; 3 - Nível Médio; 4 - Nível Superior; 5 - Especialização)" value="<?php echo htmlspecialchars( $cargo["nrgraduation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desrequeriment">Requerimentos</label>
              <input type="text" class="form-control" id="desrequeriment" name="desrequeriment" placeholder="Digite os requerimentos da função"  value="<?php echo htmlspecialchars( $cargo["desrequeriment"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desactivity">Atividades exercidas</label>
              <input type="text" class="form-control" id="desactivity" name="desactivity" placeholder="Digite as atividades exercidas pela função" value="<?php echo htmlspecialchars( $cargo["desactivity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desbasesalary">Remuneração</label>
              <input type="number" min="0.00" max="35000.00" step="0.01" class="form-control" id="desbasesalary" name="desbasesalary" placeholder="Digite o valor da remuneração base" value="<?php echo htmlspecialchars( $cargo["desbasesalary"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desweekhours">Carga Horária Mensal</label>
              <input type="number" class="form-control" id="desweekhours" name="desweekhours" placeholder="Digite a carga horária exercida pela função" value="<?php echo htmlspecialchars( $cargo["desweekhours"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
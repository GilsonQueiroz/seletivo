<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="descpf">CPF</label>
              <input type="text" class="form-control" id="descpf" name="descpf" placeholder="Digite o CPF com . e -" value="<?php echo htmlspecialchars( $user["descpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desrg">RG</label>
              <input type="text" class="form-control" id="desrg" name="desrg" placeholder="Digite o RG" value="<?php echo htmlspecialchars( $user["desrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desrgemitter">Órgão RG</label>
              <input type="text" class="form-control" id="desrgemitter" name="desrgemitter" placeholder="Digite o Órgão emissor do RG" value="<?php echo htmlspecialchars( $user["desrgemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desrgstate">RG - Estado emissor</label>
              <input type="text" class="form-control" id="desrgstate" name="desrgstate" placeholder="Digite o Estado emissor do RG" value="<?php echo htmlspecialchars( $user["desrgstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            
            <div class="form-group">
              <label for="dtrgemitter">Data emissão RG</label>
              <input type="date" class="form-control" id="dtrgemitter" name="dtrgemitter" placeholder="Data de emissão do RG" value="<?php echo htmlspecialchars( $user["dtrgemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>

            <div class="form-group">
              <label for="dtbirth">Nascimento</label>
              <input type="date" class="form-control" id="dtbirth" name="dtbirth" placeholder="Data de Nascimento" value="<?php echo htmlspecialchars( $user["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="dessex">Sexo (M/F)</label>
              <input type="text" class="form-control" id="dessex" name="dessex" placeholder="Digite o Sexo" value="<?php echo htmlspecialchars( $user["dessex"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desmother">Nome da Mãe</label>
              <input type="text" class="form-control" id="desmother" name="desmother" placeholder="Digite o nome da mãe" value="<?php echo htmlspecialchars( $user["desmother"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desemail">E-mail</label>
              <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="idpermission">Nível de Acesso</label>
              <input type="text" class="form-control" id="idpermission" name="idpermission" placeholder="Digite o nível de acesso (1 a 5)" value="<?php echo htmlspecialchars( $user["idpermission"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
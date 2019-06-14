<?php
include 'cabecera.php';
?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">Categoria <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <!-- /.box-header -->
          <!-- centro -->
          <div class="panel-body table-responsive" id="listadoregistros">
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              <!-- table-hover Cambia de color-->
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
              </tfoot>
            </table>

          </div>

          <div class="panel-body " style="height: 400px;" id="formularioregistros">
            <form name="formulario" id="formulario" action="" method="post">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre:</label>
                <input type="hidden" name="idcategoria" id="idcategoria">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="50" placeholder="Descripcion">
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submin" id="btnGuardar"><i class="fa fa-save "></i>  Guardar</button>
              </div>


              24 5.24

            </form>

          </div>
          <!--Fin centro -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<?php
require_once 'pie.php';
?>
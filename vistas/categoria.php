<?php
require "header.php";
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
            <h1 class="box-title">Categoría <button class="btn btn-success" onclick="mostrarForm(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <!-- /.box-header -->
          <!-- centro -->
          <div class="panel-body table-responsive" id="listadoregistros">
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
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
          <div class="panel-body" style="height: 400px;" id="formularioregistros">
            <form method="POST" name="formulario" id="formulario">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="nombre">Nombre</label>
                <input type="hidden" name="id_categoria" id="id_categoria">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="255" placeholder="Descripción">
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar">
                  <i class="fa fa-save"></i>Guardar
                </button>
                <button class="btn btn-danger" onclick="cancelarForm()" type="button">
                  <i class="fa fa-arrow-circle-left"></i>
                  Cancelar
                </button>
              </div>
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
include "footer.php";
?>

<script src="./scripts/categoria.js"></script>
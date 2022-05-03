var tabla;

// Función que se ejecuta al inicio
function init()
{
  mostrarForm(false);
  listar();

  $("#formulario").on("submit", function(e)
  {
    guardaryeditar(e);
  })
}

function limpiar()
{
  $("#idcategoria").val("");
  $("#nombre").val("");
  $("#descripcion").val("");
}

function mostrarForm(flag)
{
  limpiar();
  if (flag)
  {
    $("#listadoregistros").hide();
    $("#formularioregistros").show();
    $("btnGuardar").prop("disabled",false);
  }
  else
  {
    $("#listadoregistros").show();
    $("#formularioregistros").hide();
  }
}

function cancelarForm ()
{
  limpiar();
  mostrarForm(false);
}

function listar ()
{
    tabla = $("#tbllistado").dataTable({
      'aProcessing' : true, //Activamos el procesamiento del datatable
      'aServerSide' : true, //Paginacion y filtrado realizados por el servidor
      dom: 'Bfrtip', //Definimos los elementos del control de tabla
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdf'
      ],
      "ajax":
        {
          url: '../ajax/categoria.php?op=listar',
          type: "get",
          dataType: "json",
          error: function (e) {
            console.log(e.responseText);
          } 
        },
      "bDestroy": true,
      "iDisplayLength": 5, //Paginacion
      "order": [[0, "desc"]] //Ordenar los datos
    }).DataTable();
}

// Funcion para guardar y editar
function guardaryeditar(e)
{
  e.preventDefault();
  $("btnGuardar").prop("disabled", true);
  var formData = new FormData($("#formulario")[0]);

  $.ajax({
    url: "../ajax/categoria.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos)
    {
      bootbox.alert(datos);
      mostrarForm(false);
      tabla.ajax.reload();
    }
  });
  limpiar();
} 

function mostrar(idcategoria)
{
  $.post("../ajax/categoria.php?op=mostrar",{idcategoria : idcategoria}, function(data, status){
    
  })
}

init();

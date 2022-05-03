<?php
require_once "../modelos/Categoria.php";

$id_categoria = isset($_POST["id_categoria"]) ? limpiarCadena($_POST["id_categoria"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

$categoria = new Categoria();

switch ($_GET["op"]){
  case 'guardaryeditar':
    if (empty($id_categoria)) {
      $rspta = $categoria->insertar($nombre, $descripcion);
      echo $rspta ? "Categoria registrada" : "Categoria no se pudo registar";
    }else {
      $rspta = $categoria->insertar($id_categoria, $nombre, $descripcion);
      echo $rspta ? "Categoria actualizada" : "Categoria no se pudo actualizar";
    }
  break;
  case 'desactivar':
      $rspta = $categoria->desactivar($id_categoria);
      echo $rspta ? "Categoria desactivada" : "Categoria no se pudo desactivar";
  break;
  case 'activar':
      $rspta = $categoria->activar($id_categoria);
      echo $rspta ? "Categoria activada" : "Categoria no se pudo activar";
  break;
  case 'mostrar':
      $rspta = $categoria->mostrar($id_categoria);
      echo json_encode($rspta);
  break;
  case 'listar':
      $rspta = $categoria->listar();
      $data = Array();

      while ($reg = $rspta->fetch_object()){
        $data[] = array(
          "0" => $reg->id_categoria,
          "1" => $reg->nombre,
          "2" => $reg->descripcion,
          "3" => $reg->condicion
        );
      }

      $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($data),
        "isTotalDisplayRecords" => count($data),
        "aaData" => $data
      );

      echo json_encode($results);

  break;
}
?>
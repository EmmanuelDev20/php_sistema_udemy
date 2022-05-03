<?php
  // Inclusión conexión DB
  require "../config/Conexion.php";

  Class Categoria
  {
    // Método constructor
    public function __construct()
    {

    }

    // Método para insertar registros
    public function insertar($nombre, $descripcion)
    {
      $sql = "INSERT INTO categoria (nombre, descripcion, condicion)
      VALUES ('$nombre', '$descripcion', '1')";
      return ejecutarConsulta($sql);
    }

    // Método para editar registros
    public function editar($id_categoria, $nombre, $descripcion)
    {
      $sql = "UPDATE categoria SET nombre='$nombre', descripcion='$descripcion'
      WHERE id_categoria='$id_categoria'";
      return ejecutarConsulta($sql);
    }

    // Método para eliminar categorias
    public function desactivar($id_categoria)
    {
      $sql = "UPDATE categoria SET condicion = '0' 
      WHERE id_categoria='$id_categoria'";
      return ejecutarConsulta($sql);
    }

    // Método para activar categorias
    public function activar($id_categoria)
    {
      $sql = "UPDATE categoria SET condicion = '1' 
      WHERE id_categoria='$id_categoria'";
      return ejecutarConsulta($sql);
    }

    // Método para mostrar los datos de un reg a modificar 
    public function mostrar($id_categoria)
    {
      $sql = "SELECT * FROM categoria WHERE id_categoria = '$id_categoria' ";
      return ejecutarConsultaSimpleFila($sql);
    }

    // Método para listar registros
    public function listar()
    {
      $sql = "SELECT * FROM categoria";
      return ejecutarConsulta($sql);
    }
  }
?>
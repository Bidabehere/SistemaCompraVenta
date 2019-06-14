<?
//incluimos conexion a la base de datos
require '../config/conexion.php';

class Categoria
{
    //implementamos nuestro constructor
    public function __construct()
    {
    }

    //implementamos un metodo para insertar cateogiras
    public function insertar($nombre, $descripcion)
    {
        $sql = "INSERT INTO categoria (nombre, descripcion, condicion) VALUES ('$nombre', '$descripcion', '1')";
        return ejecutarConsulta($sql);
    }

    //Implementamos un metodo para editar registros
    public function editar($idcategoria, $nombre, $descripcion)
    {
        $sql = "UPDATE categoria SET nombre= '$nombre', descripcion='$descripcion' WHERE idcategoria = '$idcategoria'";
        return ejecutarConsulta($sql);
    }

    // Implementamos un metodo para desactivar la categoria
    public function desactivar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = '0' WHERE idcategoria = '$idcategoria'";
        return ejecutarConsulta($sql);
    }

    // Implementamos un metodo para activar la categoria
    public function activar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = '1' WHERE idcategoria = '$idcategoria'";
        return ejecutarConsulta($sql);
    }

    //implementar un metodo para mostrar los datos de un registro o modificar

    public function mostrar($idcategoria)
    {
         $sql = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria'";
         return ejecutarConsultaSimpleFila($sql);
    }
    //metodo para listar los registros
    public function listar()
    {
        $sql = "SELECT * FROM categoria";
        return ejecutarConsulta($sql);

    }
    
}



?>
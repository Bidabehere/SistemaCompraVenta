<?
require_once '../modelo/Categoria.php';

$categoria = new Categoria();

$idcategoria = isset($_POST['idcategoria'])? limpiarCadena( $_POST['idcategoria']):"";

$nombre = isset($_POST['nombre']) ? limpiarCadena($_POST['nombre']) : "";

$descripcion = isset($_POST['descripcion']) ? limpiarCadena($_POST['descripcion']) : "";


switch ($_GET['op'])
{
    case 'guardaryeditar':

    if(emty($idcategoria))
    {
        $rspta = $categoria -> insertar( $nombre, $descripcion);
        echo $rspta ? "Categoria registrada": "La categoria no pudo ser registrada";

    }else
    {
            $rspta = $categoria->editar($idcategoria, $nombre, $descripcion);
            echo $rspta ? "Categoria Actualizada" : "La categoria no se pudo actualizar";
    }

    break;

    case 'desactivar':
        $rspta = $categoria->desactivar($idcategoria);
        echo $rspta ? "Categoria desactivada" : "La categoria no se pudo desactivar";
    break;
    
    case 'activar':
        $rspta = $categoria->activar($idcategoria);
        echo $rspta ? "Categoria activada" : "La categoria no se pudo activar";
    break;

    case 'mostrar':
        $rspta = $categoria->mostrar($idcategoria);
        //Codificamos el resultado utilizando json
        echo json_encode($rspta);
    break;

    case 'listar':
        $rspta = $categoria->listar($idcategoria);
        //Vamos a declarar un array

        $data = Array();

        while ($reg = $rspta -> fetch_object()){
            $data[] = array(
                "0" => $reg -> idcategoria,
                "1" => $reg -> nombre,
                "2" => $reg -> descripcion,
                "3" => $reg -> condicion,
            );
        };
        $result = array(
            "sEcho" => 1, //Informacion para el data table
            "iTotalRecords" => count($data), //enviamos el total de registros a visualizar
            "iTotalDisplayRecords"=> count($data),//enviamos el total de registros a visualizar
            "aaData"=> $data);
       
        echo json_encode($result);
    break;

}

//8.36 22

?>


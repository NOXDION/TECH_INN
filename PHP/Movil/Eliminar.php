<?php
include "./Conexion.php";

$usuDocumento = $_POST['usuDocumento'];
$sql = "DELETE FROM tbUsuarios WHERE usuDocumento='$usuDocumento';";
$consulta =  mysqli_query($conexion, $sql);

if($consulta){
    echo "Datos eliminados";
} else {
    echo "Error";
}

mysqli_close($conexion);

?>
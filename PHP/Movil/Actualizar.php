<?php

include "./Conexion.php";


$usuDocumento = $_POST['usuDocumento'];
$usuNombre =$_POST['usuNombre'];
$usuApellido =$_POST['usuApellido'];
$usuEmail =$_POST['usuEmail'];
$usuTelefono =$_POST['usuTelefono'];
$usuGenero =$_POST['usuGenero'];
$usuContraseña =$_POST['usuContraseña'];
$usuEstado =$_POST['usuEstado'];
$tipUsuId =$_POST['tipUsuId'];

$sql = "UPDATE tbUsuarios SET usuDocumento='$usuDocumento', usuNombre='$usuNombre', usuApellido='$usuApellido', usuEmail='$usuEmail', usuTelefono='$usuTelefono', usuGenero='usu$Genero', usuContraseña='$usuContraseña', tipUsuId='$tipUsuId' WHERE usuDocumento='$usuDocumento';";
$consulta =  mysqli_query($conexion, $sql);

if($consulta){
    echo "Datos actualizados";
} else {
    echo "Error";
}

mysqli_close($conexion);

?>
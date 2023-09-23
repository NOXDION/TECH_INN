<?php

include "./Conexion.php";

$resultado = array();
$resultado["datos"] = array();
$sql = "SELECT * FROM tbUsuarios;";
$consulta =  mysqli_query($conexion, $sql);

while($row = mysqli_fetch_array($consulta)){
    $index["usuDocumento"] = $row["0"];
    $index["usuNombre"] = $row["1"];
    $index["usuApellido"] = $row["2"];
    $index["usuEmail"] = $row["3"];
    $index["usuTelefono"] = $row["4"];
    $index["usuGenero"] = $row["5"];
    $index["usuContraseña"] = $row["6"];
    $index["usuEstado"] = $row["7"];
    $index["tipUsuId"] = $row["8"];

    array_push($resultado["datos"],$index);
}

#$resultado["Exito"] ="1";
echo json_encode($resultado);

?>
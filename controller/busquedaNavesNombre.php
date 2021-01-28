<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$ingreso = trim($_POST['Nombre']);

$recibido = "%" . $miConexion->getConnection()->real_escape_string($ingreso) . "%";

$stm = $miConexion->getConnection()->prepare("SELECT * FROM naves WHERE Nombre LIKE ?");

$stm->bind_param("s", $recibido);

$stm->execute();

$resultado = $stm->get_result();

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Propietario'=>$i['Propietario'],
        'Tipo'=>$i['Tipo'],
        'Estado'=>$i['Estado'],
        'Foto'=>$i['Foto']
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;

$stm->close();
$miConexion->closeConnection();


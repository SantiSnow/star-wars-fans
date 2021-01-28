<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$ingreso = trim($_POST['Id']);

$Id = $miConexion->getConnection()->real_escape_string($ingreso);

$stm = $miConexion->getConnection()->prepare("Select * from armas WHERE Id = ?");

$stm->bind_param("i", $Id);

$stm->execute();

$resultado = $stm->get_result();

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Principal_usuario'=>$i['Principal_usuario'],
        'Tipo'=>$i['Tipo'],
        'Creador'=>$i['Creador'],
        'Foto'=>$i['Foto']
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;

$stm->close();
$miConexion->closeConnection();


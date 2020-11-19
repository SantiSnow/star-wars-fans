<?php

include 'conexion.php';


$miConexion = new Conexion($host, $db, $usr, $pass);

$Id = $miConexion->getConnection()->real_escape_string($_POST['Id']);

$resultado = $miConexion->selectData("Select * from naves WHERE Id=" . $Id);

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


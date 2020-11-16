<?php

include 'conexion.php';

$host = 'localhost';
$db = 'id15413540_pelis_info';
$usr = 'root';
$pass = '';

$miConexion = new Conexion($host, $db, $usr, $pass);

$resultado = $miConexion->selectData("Select * from armas");

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Propietario'=>$i['Propietario'],
        'Tipo'=>$i['Tipo'],
        'Estado'=>$i['Estado'],
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;


<?php

include 'conexion.php';

$host = 'localhost';
$db = 'id15413540_pelis_info';
$usr = 'root';
$pass = '';

$miConexion = new Conexion($host, $db, $usr, $pass);

$resultado = $miConexion->selectData("Select * from planetas");

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Descripcion'=>$i['Descripcion'],
        'Primer_Aparicion'=>$i['Primer_Aparicion']
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;


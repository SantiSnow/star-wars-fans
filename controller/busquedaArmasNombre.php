<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$recibido = $_POST['Nombre'];

$resultado = $miConexion->selectData("Select * from armas WHERE Nombre LIKE '%" . $recibido . "%'");

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


<?php

include 'conexion.php';


$miConexion = new Conexion($host, $db, $usr, $pass);

$recibido = $miConexion->getConnection()->real_escape_string($_POST['Nombre']);

$resultado = $miConexion->selectData("Select * from naves WHERE Nombre LIKE '%" . $recibido . "%'");

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

$miConexion->closeConnection();


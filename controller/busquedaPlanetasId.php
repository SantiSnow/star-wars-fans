<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$Id = $miConexion->getConnection()->real_escape_string($_POST['Id']);

$resultado = $miConexion->selectData("Select * from planetas WHERE Id=" . $Id);

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Descripcion'=>$i['Descripcion'],
        'Primer_Aparicion'=>$i['Primer_Aparicion'],
        'Foto'=>$i['Foto']
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;

$miConexion->closeConnection();

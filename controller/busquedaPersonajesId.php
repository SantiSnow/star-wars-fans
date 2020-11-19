<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$Id = $miConexion->getConnection()->real_escape_string($_POST['Id']);

$resultado = $miConexion->selectData("Select * from personajes WHERE Id=" . $Id);

$miJson = array();

while($i = $resultado->fetch_assoc()){
    $miJson[]= array(
        'Id'=>$i['ID'],
        'Nombre'=>$i['Nombre'],
        'Estado'=>$i['Estado'],
        'Planeta_Origen'=>$i['Planeta_Origen'],
        'Rango'=>$i['Rango'],
        'Sensible'=>$i['Sensible'],
        'Trilogia'=>$i['Trilogia'],
        'Peliculas'=>$i['Peliculas'],
        'Raza'=>$i['Raza'],
        'Genero'=>$i['Genero'],
        'Interprete'=>$i['Interprete'],
        'Foto'=>$i['Foto']
    );
}

$stringJson = json_encode($miJson);

echo $stringJson;

$miConexion->closeConnection();

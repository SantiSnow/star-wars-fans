<?php

include 'conexion.php';

$host = 'localhost';
$db = 'id15413540_pelis_info';
$usr = 'root';
$pass = '';

$miConexion = new Conexion($host, $db, $usr, $pass);

$recibido = $_POST['Nombre'];

$resultado = $miConexion->selectData("Select * from personajes WHERE Nombre LIKE '%" . $recibido . "%'");

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


<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$ingreso = trim($_POST['Nombre']);

$recibido = "%" . $miConexion->getConnection()->real_escape_string($ingreso) . "%";

$stm = $miConexion->getConnection()->prepare("SELECT * FROM personajes WHERE Nombre LIKE ?");

$stm->bind_param("s", $recibido);

$stm->execute();

$resultado = $stm->get_result();

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

$stm->close();
$miConexion->closeConnection();


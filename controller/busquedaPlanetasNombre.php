<?php

include 'conexion.php';

$miConexion = new Conexion($host, $db, $usr, $pass);

$recibido = "%" . $miConexion->getConnection()->real_escape_string($_POST['Nombre']) . "%";

$stm = $miConexion->getConnection()->prepare("SELECT * FROM planetas WHERE Nombre LIKE ?");

$stm->bind_param("s", $recibido);

$stm->execute();

$resultado = $stm->get_result();

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

$stm->close();
$miConexion->closeConnection();


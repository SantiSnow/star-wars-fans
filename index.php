<html>
<body>

<?php

require('controller/conexion.php');

echo 'Server is on!';
echo '<br />';

$host = 'localhost';
$db = 'id15413540_pelis_info';
$usr = 'root';
$pass = '';

$miConexion = new Conexion($host, $db, $usr, $pass);

$resultado = $miConexion->selectData("Select * from naves");

echo "<br />";

if($resultado != null){
    while ($i = $resultado->fetch_assoc()){
        echo $i['Nombre'] . '<br />';
    }
}
else{
    echo 'No data was found!';
}

?>

</body>
</html>
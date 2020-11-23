<!DOCTYPE html>
<html lang="es">
<head>
    <?php

    include 'view/head.php';

    ?>
    <style>
        body{
            background-image: url(view/imgs/death-star-2.jpg);
            background-repeat: no-repeat;
        }
        #principal-container{
            background-color: #375a7f;
            border-radius: 10px;
            opacity: 0.7;
        }
        .card-title{
            margin: 5px;
        }
        .results{
            margin-left: 15px;
            margin-right: 15px;
        }
    </style>

</head>
<body>

<?php
include "view/nav-bar.php";
?>

    <br />
    <br />

    <div class="container" id="principal-container">
        <h3 class="titulo-seccion">Buscar armas del universo Star Wars:</h3>
        <br />
        <br />
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Nombre">Buscar por nombre:</label>
                    <input type="text" id="Nombre" name="Nombre" placeholder="Ingrese nombre" class="form-control" />
                    <br />
                    <button type="submit" class="btn btn-danger" onclick="peticion()">Buscar</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Id">Buscar por número id:</label>
                    <input type="number" id="Id" name="Id" placeholder="Ingrese ID" class="form-control" />
                    <br />
                    <button type="submit" class="btn btn-danger" onclick="busquedaId()">Buscar</button>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="row">
            <div id="resultado" class="col-4 results">

            </div>
            <div id="resultadoId" class="col-4 results">

            </div>
        </div>

        <br />
        <br />
        <br />
        <br />
    </div>

    <br />
    <br />

    <script>
        //buscar por nombre
        function peticion(){
            const usrInput = $("#Nombre").val();

            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    const arreglo = JSON.parse(this.responseText);

                    $("#resultado").html(`<div class="card" style='width: 18rem;'>
                        <h4 class='card-title' id='nombre'>${arreglo[0].Nombre}</h4>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>ID: ${arreglo[0].Id}</li>
                            <li class='list-group-item'>Principal usuario: ${arreglo[0].Principal_usuario}</li>
                            <li class='list-group-item'>Tipo: ${arreglo[0].Tipo}</li>
                            <li class='list-group-item'>Creador: ${arreglo[0].Creador}</li>
                        </ul>
                    </div>`);


                }
            }

            xmlhttp.open('POST', 'controller/busquedaArmasNombre.php', true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("Nombre=" + usrInput);
        }
        //fin del metodo

        //buscar por id
        function busquedaId(){
            const usrInput = $("#Id").val();

            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    const arreglo = JSON.parse(this.responseText);


                    $("#resultadoId").html(`<div class="card" style='width: 18rem;'>
                        <h4 class='card-title' id='nombre'>${arreglo[0].Nombre}</h4>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>ID: ${arreglo[0].Id}</li>
                            <li class='list-group-item'>Principal usuario: ${arreglo[0].Principal_usuario}</li>
                            <li class='list-group-item'>Tipo: ${arreglo[0].Tipo}</li>
                            <li class='list-group-item'>Creador: ${arreglo[0].Creador}</li>
                        </ul>
                    </div>`);
                }
            }

            xmlhttp.open('POST', 'controller/busquedaArmasId.php', true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("Id=" + usrInput);
        }
        //fin del metodo
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


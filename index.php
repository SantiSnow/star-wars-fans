<!DOCTYPE html>
<html lang="es">
<head>
    <?php

    include 'view/head.php';

    ?>


    <style>
        body{
            background-image: url(view/imgs/tatooine.jpg);
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
            margin-bottom: 5px;
            margin-top: 5px;
        }
        .card{
            margin-bottom: 5px;
            margin-top: 5px;
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
        <h3 class="titulo-seccion">Buscar personajes del universo Star Wars:</h3>
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
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Interprete">Buscar por interprete:</label>
                    <input type="text" Id="Interprete" name="Interprete" placeholder="Ingrese el actor que lo interpreta" class="form-control" />
                    <br />
                    <button type="submit" class="btn btn-danger" onclick="busquedaInterprete()">Buscar</button>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="row">
            <div id="resultado" class="col-sm-12 col-md-3 col-lg-4 col-xl-4 results">

            </div>
            <div id="resultadoId" class="col-sm-12 col-md-3 col-lg-4 col-xl-4 results">

            </div>
            <div id="resultadoInterp" class="col-sm-12 col-md-3 col-lg-4 col-xl-4 results">

            </div>
        </div>

        <br />
        <br />
    </div>
<br />
<br />


<br />
<br />

    <script>
        //buscar por nombre
        function peticion(){
            const usrInput = $("#Nombre").val();

            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    if(this.responseText != '[]'){
                        const arreglo = JSON.parse(this.responseText);

                        $("#resultado").html(`<div class="card" style='width: 18rem;'>
                        <h4 class='card-title' id='nombre'>${arreglo[0].Nombre}</h4>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Intérprete: ${arreglo[0].Interprete}</li>
                            <li class='list-group-item'>Planeta de origen: ${arreglo[0].Planeta_Origen}</li>
                            <li class='list-group-item'>Raza: ${arreglo[0].Raza}</li>
                            <li class='list-group-item'>Rango: ${arreglo[0].Rango}</li>
                            <li class='list-group-item'>Género: ${arreglo[0].Genero}</li>
                            <li class='list-group-item'>Trilogias: ${arreglo[0].Trilogia}</li>
                            <li class='list-group-item'>Estado: ${arreglo[0].Estado}</li>
                            <li class='list-group-item'>ID: ${arreglo[0].Id}</li>
                        </ul>
                    </div>`);
                    }
                    else {
                        $("#resultado").html(`<div class=\"card\" style="width: 18rem;"><h6 class='card-title' id='nombre'>No se encontro un personaje con ese nombre</h6></div>`);
                    }




                }
            }

            xmlhttp.open('POST', 'controller/busquedaPersonajesNombre.php', true);
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
                            <li class='list-group-item'>Intérprete: ${arreglo[0].Interprete}</li>
                            <li class='list-group-item'>Planeta de origen: ${arreglo[0].Planeta_Origen}</li>
                            <li class='list-group-item'>Raza: ${arreglo[0].Raza}</li>
                            <li class='list-group-item'>Rango: ${arreglo[0].Rango}</li>
                            <li class='list-group-item'>Género: ${arreglo[0].Genero}</li>
                            <li class='list-group-item'>Trilogias: ${arreglo[0].Trilogia}</li>
                            <li class='list-group-item'>Estado: ${arreglo[0].Estado}</li>
                            <li class='list-group-item'>ID: ${arreglo[0].Id}</li>
                        </ul>
                    </div>`);
                }
            }

            xmlhttp.open('POST', 'controller/busquedaPersonajesId.php', true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("Id=" + usrInput);
        }
        //fin del metodo

        //buscar por interprete
        function busquedaInterprete(){
            const usrInput = $("#Interprete").val();

            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const arreglo = JSON.parse(this.responseText);

                    $("#resultadoInterp").html(`<div class="card" style='width: 18rem;'>
                        <h4 class='card-title' id='nombre'>${arreglo[0].Nombre}</h4>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Intérprete: ${arreglo[0].Interprete}</li>
                            <li class='list-group-item'>Planeta de origen: ${arreglo[0].Planeta_Origen}</li>
                            <li class='list-group-item'>Raza: ${arreglo[0].Raza}</li>
                            <li class='list-group-item'>Rango: ${arreglo[0].Rango}</li>
                            <li class='list-group-item'>Género: ${arreglo[0].Genero}</li>
                            <li class='list-group-item'>Trilogias: ${arreglo[0].Trilogia}</li>
                            <li class='list-group-item'>Estado: ${arreglo[0].Estado}</li>
                            <li class='list-group-item'>ID: ${arreglo[0].Id}</li>
                        </ul>
                    </div>`);
                }
            }
            xmlhttp.open('POST', 'controller/busquedaPersonajesInterprete.php', true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("Interprete=" + usrInput);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" -->
    <link rel="stylesheet" href="view/css/bootstrap.darkly.min.css">
    <!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
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
            <div class="col-md-12">
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
                    <div id="resultado" class="col-3 results">

                    </div>
                    <div id="resultadoId" class="col-3 results">

                    </div>
                    <div id="resultadoInterp" class="col-3 results">

                    </div>
                </div>

                <br />
                <br />
            </div>
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
                    //console.log(this.responseText);
                    const arreglo = JSON.parse(this.responseText);
                    console.log(arreglo);

                    console.log(`Resultado
                    ${arreglo[0].Nombre}
                    `)

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
                        </ul>
                    </div>`);


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
                    //console.log(this.responseText);
                    const arreglo = JSON.parse(this.responseText);
                    console.log(arreglo);

                    console.log(`Resultado
                    ${arreglo[0].Nombre}
                    `)

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
                    console.log(arreglo);

                    console.log(`Resultado
                        ${arreglo[0].Nombre}
                    `)

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
                        </ul>
                    </div>`);
                }
            }
            xmlhttp.open('POST', 'controller/busquedaPersonajesInterprete.php', true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("Interprete=" + usrInput);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


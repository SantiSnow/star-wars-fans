<!DOCTYPE html>
<html lang="es">
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
            background-image: url(view/imgs/jakku.jpg);
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
        <h3 class="titulo-seccion">Todos los personajes del universo Star Wars:</h3>
        <br />
        <br />
        <div class="row" id="resultado">

        </div>
        <br />
        <br />
    </div>

    <br />
    <br />

    <script>
            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    const arreglo = JSON.parse(this.responseText);

                    for (i in arreglo){
                        $("#resultado").append(`<div class="col-md-3 col-sm-12 col-lg-4 col-xl-4">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">${arreglo[i].Nombre}</h5>
                                                        <p class="card-text">ID: ${arreglo[i].Id}</p>
                                                        <p class="card-text">Intérprete: ${arreglo[i].Interprete}</p>
                                                        <p class="card-text">Planeta de origen: ${arreglo[i].Planeta_Origen}</p>
                                                        <p class="card-text">Raza: ${arreglo[i].Raza}</p>
                                                        <p class="card-text">Rango: ${arreglo[i].Rango}</p>
                                                        <p class="card-text">Género: ${arreglo[i].Genero}</p>
                                                        <p class="card-text">Trilogias: ${arreglo[i].Trilogia}</p>
                                                        <p class="card-text">Estado: ${arreglo[i].Estado}</p>
                                                      </div>
                                                    </div>
                                                  </div>`);
                    }

                }
            }

            xmlhttp.open('GET', 'controller/busquedaPersonajes.php', true);
            xmlhttp.send();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


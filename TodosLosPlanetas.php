<!DOCTYPE html>
<html lang="es">
<head>
    <?php

    include 'view/head.php';

    ?>
    <style>
        body{
            background-image: url(view/imgs/death-star.jpg);
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
        <h3 class="titulo-seccion">Todos los planetas del universo Star Wars:</h3>
        <br />
        <br />
        <div class="row" id="resultado">

        </div>
        <br />
        <br />
    </div>

    <br />
    <br />
    <!-- Modales -->
    <div id="modales">
    
    </div>

    <script>
            const usrInput = $("#Nombre").val();

            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    const arreglo = JSON.parse(this.responseText);

                    for (i in arreglo){
                        $("#resultado").append(`<div class="col-md-3 col-sm-12 col-lg-4 col-xl-4">
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title">${arreglo[i].Nombre}</h5>
                                                        <br />
                                                        <button type="button" data-toggle="modal" data-target="#modal${i}" class="btn btn-danger">Ver datos</button>
                                                      </div>
                                                    </div>
                                                  </div>`);

                        $("#modales").append(`
                        <div class="modal fade" id="modal${i}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">${arreglo[i].Nombre}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>ID del planeta:</strong> ${arreglo[i].Id}</p>
                                        <p><strong>Descripción:</strong> ${arreglo[i].Descripcion}</p>
                                        <br />
                                        <p><strong>Primer aparición:</strong> ${arreglo[i].Primer_Aparicion}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `);
                    }
                }
            }

            xmlhttp.open('GET', 'controller/busquedaPlanetas.php', true);
            xmlhttp.send();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>


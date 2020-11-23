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
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
            <h3 class="titulo-seccion">Sobre el creador:</h3>
            <br />
            <br />
            <div class="row">
                <p>¡Hola, bienvenido a la aplicación Star Wars Fans! Algo de información sobre el creador de esta aplicación, y sobre su creador:</p>
                <br />
                <p>Soy Santiago Aguirre, un desarrollador, fanático de Star Wars, y de la programación. Este sitio es una forma de unir dos de las cosas que más me gustan,
                    espero que la disfrutes usandola tanto como yo disfrute haciendola. El sitio le permite a quien lo visite ver algunos de los personajes, planetas, armas y naves
                    del universo Star Wars. Por supuesto la información no esta completa (¡El universo Star Wars es enoooorme!) y abarca las peliculas, series animadas, juegos e historias
                    canónicas.</p>
                <br />
                <p>Podés buscar por nombre o por número de ID. Cada personaje, cada planeta, arma o nave lleva un número entero identificador. Si lo recordas, podes buscar por dicho número.</p>
                <br />
            </div>
            <br />
            <div class="row">
                <h6>Sobre la aplicación:</h6>
                <p>Se trata de un programa de código abierto, que podes visitar en GitHub, sin ningún problema, el link está mas abajo. No hace uso de Cookies, ni de ningun tipo de programa
                    invasivo. No usa el almacenamiento local del visitante, ni tampoco recopila datos sobre sus usarios y visitantes.</p>
                <br />
                <p><strong>¡La información está incompleta! ¿Donde estan mis personajes favoritos? </strong> El universo Star Wars es muy grande, abarca peliculas, series, comics, historias y juegos, ¡y eso
                solo por mencionar las historias canónicas! Dado que solo soy una persona en este proyecto, no puedo subir rapidamente todos los personajes, lo hago en mi tiempo libre de a poco.
                Pero si te interesa participar en este proyecto, y ayudarme ampliar la información actual, estas invitado a hacerlo, enviame un correo a aguirresantiago81@gmail.com, y pormeto responderte
                lo antes posible, para decirte como podes colaborar sumando información.</p>
                <br />
                <br />
                <p>Si queres ver el código fuente, podes verlo aquí:</p>
            </div>
            <a href="https://github.com/SantiSnow/star-wars-fans" class="btn btn-danger">GitHub Source Code</a>
            <br />
            <br />
            <div class="row">
                <h6>Sobre los derechos de autor:</h6>
                <p>No soy dueño de los derechos de autor de Star Wars, ni de sus personajes, ni de sus datos de ningún tipo. Este sitio es simplemente informativo y sin fin de lucro,
                    para que sus fanáticos e interesados puedan busacr información interesante sobre este gran universo.</p>
            </div>

            <br />
            <br />
        </div>
    </div>
<br />
<br />
<br />
<br />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


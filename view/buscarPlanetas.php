<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Naves - Star Wars Fans</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>




    <div class="container">
        <div class="row">
            <h2>Buscar planetas:</h2>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <form method="post" action="">
                    <label for="Nombre">Buscar por nombre:</label>
                    <input type="text" name="Nombre" placeholder="Ingrese nombre" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
            <div class="form-group col-md-4">
                <form method="post" action="">
                    <label for="Id">Buscar por número id:</label>
                    <input type="number" name="Id" placeholder="Ingrese ID" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
            <div class="form-group col-md-4">
                <form method="post" action="">
                    <label for="Descripcion">Buscar por descripción:</label>
                    <input type="text" name="Dueño" placeholder="Ingrese descripción del planeta" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
        </div>
    </div>




</body>
</html>
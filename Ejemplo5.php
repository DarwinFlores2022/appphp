<?php
$promedio = 0.0;
if (isset($_POST['enviar'])) {
    //echo "<script>alert('hola');</script>";
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $promedio = ($nota1 + $nota2 + $nota3) / 3;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO
    </div>
    <div class="container">
        <form method="POST" action="Ejemplo5.php">
            <div class="form-group">
                <label for="">NOTA 1</label>
                <input type="text" class="form-control" placeholder="Escriba una nota" name="nota1">
            </div>
            <div class="form-group">
                <label for="">NOTA 2</label>
                <input type="text" class="form-control" placeholder="Escriba una nota" name="nota2">
            </div>
            <div class="form-group">
                <label for="">NOTA 3</label>
                <input type="text" name="nota3" class="form-control" placeholder="Escriba una nota">
            </div>

            <button type="submit" name="enviar" class="btn btn-primary">Submit</button>
        </form>
        <div class="jumbotron">
            <h1 class="display-4">PROMEDIO: <?php echo number_format($promedio, 2) ?> </h1>

        </div>
    </div>
</body>

</html>
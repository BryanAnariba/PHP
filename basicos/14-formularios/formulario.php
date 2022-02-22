<?php
    $data = (isset( $_POST['nombreUsuario'] ) && !empty( $_POST['nombreUsuario'] )) ? $_POST[ 'nombreUsuario' ] : 'No hay Informacion';
    $radioData =(isset( $_POST['nacionalidad'] ) && !empty( $_POST['nacionalidad'] )) ? $_POST['nacionalidad'] : 'No hay Informacion de la nacionalidad';
    //4>00
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <?php if ( $_POST ) { ?>
        <strong>Datos:  <?php echo $data ?> </strong>
        <strong>Nacionalidad:  <?php echo $radioData ?> </strong>
    <?php } else { ?>
        <strong>Datos: Aun no hay datos </strong>
    <?php } ?>
    <!-- <form action="procesar.php" method="POST"> -->
    <form action="formulario.php" method="POST">
        <label for="nombreUsuario">Nombre Usuario:</label>
        <!-- <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?php /*echo $data */?>"> -->
        <input type="text" name="nombreUsuario" id="nombreUsuario">

        <br>
        <h2>Nacionalidad: </h2>
        Honduras: <input type="radio" name="nacionalidad" id="nacionalidad" value="H">
        Salvador: <input type="radio" name="nacionalidad" id="nacionalidad" value="S">
        Guatemala: <input type="radio" name="nacionalidad" id="nacionalidad" value="G">
        <br>

        <input type="submit" value="Procesar">
    </form>
</body>
</html>
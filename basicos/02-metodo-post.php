<?php
    // Recibe informacion del formulario html post
    if ( isset( $_POST ) === true && empty( $_POST ) === false ) {
        $nombrePersona = $_POST['nombrePersona'];
        echo $nombrePersona;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method in PHP</title>
</head>
<body>
    <form action="02-metodo-post.php" method="POST">
        <label for="nombrePersona">Write Complete Name</label>
        <input type="text" name='nombrePersona'>
        <input type="submit" value="Send Name">
    </form>
</body>
</html>
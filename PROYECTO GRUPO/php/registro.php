<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
<form action="validarregistro.php" method="post">
<div class="container">
<form action="" method="POST" class="formulario">
    <h2 class="titulo">REGISTRAR</h2>
    <?php
    include("db.php")
    ?>

    <div class="padre">
        <div class="nombre">
        <label for="">Nombres</label>
        <input type="text" name="nombre">
        </div>
    <div class="apellido">
        <label for="">Apellidos</label>
        <input type="text" name="apellido">
        </div>
    <div class="usuario">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        </div>

    <div class="cuenta">
        <input class="boton"type="submit" value="Registar" name="registro">
        
        
    </div>
</form>
</div>
    
</body>
</html>
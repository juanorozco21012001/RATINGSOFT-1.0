<?php
include("db.php");
$consulta="SELECT* FROM personal where usuario = '$USUARIO' and password='$PASSWORD' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");

}else{
    include ("index.html")
    ?>
    <h1> "ERROR, INFORMACION INCORRECTA"</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
if (!empty ($_POST["registro"])){
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"])or empty($_POST["contraseña"])or empty($_POST["fecha"])){
        header("location:home.html");
    } else {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["correo"];
    $contraseña=$_POST["contraseña"];
    $fecha=$_POST["fecha"];
    $sql=$conexion->query("insert into personal(nombre, apellido, correo, contraseña, fecha) values('$nombre','$apellido','$correo','$contraseña','$fecha')");
    }
    
    if ($sql==1){
        include ("validarregistro.php")
    ?>
    <h1> "ERROR, INFORMACION INCORRECTA"</h1>
    <?php
    }else{
        include ("validarregistro.php")
    ?>
    <h1> "ERROR, INFORMACION INCORRECTA"</h1>
    <?php
    }
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
 
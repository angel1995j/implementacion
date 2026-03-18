<?php
$mensaje = "";

if ($_GET) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    
    if ($nombre == "") {
        $mensaje = "Falta el nombre";
    } elseif ($edad == "") {
        $mensaje = "Falta la edad";
    } elseif ($edad >= 18) {
        $mensaje = "Hola $nombre, eres mayor de edad";
    } else {
        $mensaje = "Hola $nombre, eres menor de edad";
    }
}
?>

<form method="get">
    Nombre: <input type="text" name="nombre">
    <br><br>
    Edad: <input type="text" name="edad">
    <br><br>
    <input type="submit" value="Enviar">
</form>

<h3><?php echo $mensaje; ?></h3>

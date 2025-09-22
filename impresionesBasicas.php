<?php

// Uso de $_SERVER (información del servidor)
echo "Tu navegador: " . $_SERVER['HTTP_USER_AGENT'];

echo "Tu IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";

echo "Fecha y hora actual: " . date("Y-m-d H:i:s");

?>

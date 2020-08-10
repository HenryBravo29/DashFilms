<?php
$destino="henrybra29@gmail.com"
$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];
$contenido= "Nombre:  " . $nombre . "\nTelefono:  " . $telefono . "\nMensaje:  " . $mensaje
mail($destino,"Contacto",$contenido);
header("Location:Index.html");





?>
<?php 
  $destino="jodanny100reynoso@gmail.com";
  $Nombre= $_post["Nombre"];
  $Correo= $_post["Correo"];
  $Telefono= $_post["Telefono"];
  $mensaje= $_post["mensaje"];
  $contenido= "Nombre" . $Nombre . "\nCorreo: " . $Correo . "\nTelefono:" . $Telefono . "\nmensaje" . $mensaje;
  mail($destino, "Contacto", $contenido);
  header("Location:Gracias.html");


 ?>
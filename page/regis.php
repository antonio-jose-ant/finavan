<?php 
   include "../includes/config.php";
   
$registroUser = array(
   'usuario' => $_POST['usuario'],
   'nombre' => $_POST['nombre'],
   'apellidop' => $_POST['apellidop'],
   'apellidom' => $_POST['apellidom'],
   'contrasena' => $_POST['contrasena'],
   'correo' => $_POST['correo'],
   'telefono' => $_POST['telefono'],
   'cantidadI' => $_POST['cantidadI']
);

$camposVacios = false; // Variable de bandera para rastrear si hay campos vacíos

foreach ($registroUser as $clave => $valor) {
    if (empty($valor)) {
        $camposVacios = true;
        break; // Detener el bucle tan pronto como se encuentre un campo vacío
    }
}

if ($camposVacios) {
    echo "Es necesario llenar todos los campos.";
} else {
   $query = "INSERT INTO usuario (usuario, nombre, apellidop, apellidom, contrasena, correo, telefono, cantidadI) VALUES (
      '" . $registroUser['usuario'] . "',
      '" . $registroUser['nombre'] . "',
      '" . $registroUser['apellidop'] . "',
      '" . $registroUser['apellidom'] . "',
      '" . $registroUser['contrasena'] . "',
      '" . $registroUser['correo'] . "',
      '" . $registroUser['telefono'] . "',
      '" . $registroUser['cantidadI'] . "'
  )";
   $resultado = mysqli_query ($conexion,$query);
    if($resultado){
       header("Location:index.php");
    }else{
       header("Location:error.php");
  }
}

    

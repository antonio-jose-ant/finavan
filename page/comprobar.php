<?php
session_start();

if ($_POST['ing'] == "Ingresar") {
   $logins = array(
   'usuario' => $_POST['usuario'],
   'contrasena' => $_POST['contrasena'],
);

$camposVacios = false; // Variable de bandera para rastrear si hay campos vacíos

foreach ($logins as $clave => $valor) {
    if (empty($valor)) {
        $camposVacios = true;
        break; // Detener el bucle tan pronto como se encuentre un campo vacío
    }
}
    
   include "../includes/config.php";
      if($camposVacios==false){
         $query = "SELECT * FROM usuario WHERE usuario='".$logins['usuario']."' AND contrasena = '".$logins['contrasena']."'";
         $resultado = mysqli_query($conexion, $query);
         $contador = mysqli_num_rows($resultado); // Contamos las filas que coinciden
         if ($contador > 0) {
            $fila = mysqli_fetch_array($resultado);
            $_SESSION['user'] = $fila['nombre']; // Establecemos la variable de sesión 'user' con el ID del usuario
            header("Location: inicio.php");
         } else {
            header("Location: error.php");
         }
      }else{
         header("Location: index.php");
      }

} else {
   header("Location: registro.php");
}
?>

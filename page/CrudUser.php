<?php
session_start();
include "../includes/config.php";

if (isset($_POST['tab'])) {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $cantidadI = $_POST['cantidadI'];
    if ($_POST['tab'] === 'Acualiza') {
        // Realiza la consulta de actualización
        $query = "UPDATE usuario SET 
                  usuario = '$usuario', 
                  nombre = '$nombre', 
                  apellidop = '$apellidop', 
                  apellidom = '$apellidom', 
                  contrasena = '$contrasena', 
                  correo = '$correo', 
                  telefono = '$telefono', 
                  cantidadI = '$cantidadI' 
                  WHERE id = $id";

        if (mysqli_query($conexion, $query)) {
            echo "Los datos se han actualizado correctamente.";
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($conexion);
        }
    } elseif ($_POST['tab'] === 'Eliminar') {
        $query = "DELETE FROM usuario WHERE id = $id";

if (mysqli_query($conexion, $query)) {
  echo "Los datos se han actualizado correctamente.";
} else {
  echo "Error al actualizar los datos: " . mysqli_error($conexion);
}
    }
    header("Location: listadoUser.php");
} else {
    // Si se intenta acceder a este archivo sin un botón válido, redirige a alguna página apropiada.
    header("Location: index.php?mensaje=69");
}
?>

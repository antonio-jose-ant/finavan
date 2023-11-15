<?php
    session_start();
    include "../includes/config.php";
    if (isset($_SESSION['user'])) {
    $query = "SELECT * FROM usuario ";
    $resultado = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
<section class="container">
        <img class="logo" src="../assets/resouces/img/logo/sevan2.png" alt="">
        <?php
            include "../includes/header.php";
        ?>
        <div>
            <form action="CrudUser.php" method="post">
                <?php
                    if (mysqli_num_rows($resultado) > 0) {
                        echo "<table border='1'>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Contraseña</th> 
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>CantidadI</th>
                                    <th>Actualiazar</th>
                                    <th>Eliminar</th>
                                </tr>";

                        while ($fila = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                                echo "<td><input type='hidden' value='" . $fila['id'] . "' name='id'><input type='text' value='" . $fila['usuario'] . "' name='usuario' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['nombre'] . "' name='nombre' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['apellidop'] . "' name='apellidop' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['apellidom'] . "' name='apellidom' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['contrasena'] . "' name='contrasena' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['correo'] . "' name='correo' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['telefono'] . "' name='telefono' class='tableText'></td>";
                                echo "<td><input type='text' value='" . $fila['cantidadI'] . "' name='cantidadI' class='tableText'></td>";
                                echo "<td>" . " <input class='btn btnActualizar' type='submit' name='tab' value='Acualiza'>" . "</td>";
                                echo "<td>" . " <input class='btn btnEliminar' type='submit' name='tab' value='Eliminar'>" . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        header("Location: destruir.php");
                    }
                ?>
            </form>
        </div>
        <?php
            include "../includes/footer.php";
        ?>
    </section>

</body>
</html>

<?php
} else {
    header("Location: index.php?mensaje=69");
}
?>
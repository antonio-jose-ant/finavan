<?php
if($_GET['mensaje']==69){
    echo "No se pude acceder";
}elseif($_GET['mensaje']==1){
    echo "Tu sesion se cerro satisfactoriamente";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Finavan | Usuario</title>
    <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
<style>
        body,html{
            height: 100% !important;
            width: 100%;
        }
    </style>
    <section class="contenido">
        <img class="logo" src="../assets/resouces/img/logo/sevan2.png" alt="">
        <div class="formulario">
            <form action="comprobar.php" method="post">
                <img class="img" src="../assets/resouces/img/logo/finavan.png" alt="">
                <label for="">Usuario:</label>
                <input class="cuadrado" type="text" name="usuario" placeholder="Lobuki" >
                <label for="">Contraseña:</label>
                <input class="cuadrado cuadradof" type="password" name="contrasena" placeholder="********" >
                <!-- Botones -->
                <input type="submit" class="btn" value="Ingresar" name="ing">
                <input type="submit" class="btn btnRegistrate" value="Registrate" name="ing" >
            </form>
        </div>
        <div>
            <img class="contenido2" src="../assets/resouces/img/Inicio/Money.png" alt="">
        </div>
    </section>
</body>
</html>
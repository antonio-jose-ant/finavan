<?php
 session_start();
 session_unset(); // Eliminamos todas las variables de sesión
 session_destroy(); // Destruimos la sesión
    header("Location:index.php?mensaje=0");
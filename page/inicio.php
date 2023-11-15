<?php
    session_start();
    if (isset($_SESSION['user'])) {
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
        <div class="conenido">
            <div class="inicio">
                <div>
                    <?php 
                            echo "Bienvenido: " . $_SESSION['user']; // Imprime el usuario
                    ?>
                </div>
                <div>
                    <div>Saldo</div>
                    <div>Meta 1:</div>
                    <div>Meta 2:</div>
                    <div>Ahorro</div>
                </div>
            </div>
            <div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <?php
            include "../includes/footer.php";
        ?>
    </section>
    <script src="../assets/js/master.js"></script>
</body>
</html>
<?php
} else {
    header("Location: index.php?mensaje=69");
}
?>

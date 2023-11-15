<nav class="menu">
            <ul id="alto">
                <li> 
                    <img src="../assets/resouces/icons/indent.png" alt="">           
                    <h3>
                        <?php
                            echo "Bienvenido: " . $_SESSION['user']; // Imprime el usuario
                        ?>
                    </h3>
                </li>
                <li>
                    <a href="inicio.php">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="listadoUser.php">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        usuarios
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        Ahorro
                    </a>
                    </li>
                <li>
                    <a href="">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        Gastos
                    </a>
                    </li>
                <li>
                    <a href="">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        Metas
                    </a>
                    </li>
                <li>
                    <a href="registro.php">
                        <img src="../assets/resouces/icons/indent.png" alt="">           
                        Registrar
                    </a>
                    </li>
                <li class="hambur" id="colapce"><p></p></li>
            </ul>
            <?php
                echo "<a  href='destruir.php'><button class='btn btnSalir'>Salir</button></a>";
            ?>
</nav>
<?php

?>
<div class="col-lg-3 col-md-3">
    <?php
    if(!isset($_SESSION['user'])){
    ?>
    <div id="logueo">
        <h3>Entrar a la web</h3>

        <form action="index.php?c=Usuario&&a=ComprobarLogueo" method="post">
            <div class="form-group">
                <label for="email">Correo Electronico</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="Contrasenia">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" id="contrasenia" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </form>

        <ul class="nav flex-column">
            <li><a class="nav-link active" href="">Registrar aqui</a></li>
        </ul>
    </div>
    <?php
    }else{
    ?>
    <div>
        <p>Mi Carrito</p>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="">Productos:</a></li>
            <li class="nav-item"><a class="nav-link" href="">Total:</a></li>
            <li class="nav-item"><a class="nav-link" href="">Ver el carrito</a></li>
        </ul>
    </div>
    <div>
        <p><?=$_SESSION['user']->nombre?> <?=$_SESSION['user']->apellidos?></p>
        <ul class="nav flex-column">
            <?php 
                if($_SESSION['admin']){
            ?>
            <li class="nav-item"><a class="nav-link" href="">Gestionar producto</a></li>
            <li class="nav-item"><a class="nav-link" href="">Gestionar pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="">Mis Pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?c=Usuario&&a=CerrarSession">Cerrar Session</a></li>
            <?php
            }else{
            ?>
            <li class="nav-item"><a class="nav-link" href="">Mis Pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?c=Usuario&&a=CerrarSession">Cerrar Session</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <?php
    }
    ?>
</div>

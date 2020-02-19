<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de VideoJuegos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Course CSS -->
    <link rel="stylesheet" href="estilos.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        session_start();
        require_once("header.php");


    ?>
    <div id="contenedor">
    <?php
    if(isset($_SESSION['errores'])){
        foreach ($_SESSION['errores'] as $valor ) {
            echo "<p>*: $valor </p><br>";
        }
        $_SESSION['errores'] = null;
    }?>
        <div class="principal">
            <h2>Ultima entradas</h2>
            
            <?php 
                $entradas="SELECT titulo,descripcion,fecha,nombre FROM categorias INNER JOIN entradas on (categorias.id=entradas.categoria_id)order by fecha DESC limit 4";
                $mostrar=mysqli_query($conexion,$entradas);
                if (mysqli_num_rows($mostrar)>0) {
                    while ($fila=mysqli_fetch_assoc($mostrar)) {
            ?>
                <div class="ultimaEntrada">
                    <h3><?= $fila['titulo'] ?>  <?= $fila['nombre'] ?></h3>
                    <p><?= $fila['descripcion'] ?></p>
                </div>
                
            <?php 
                    }
                }else{
                    echo "No hay ninguna entrada";
                }
            ?>

        </div>
        <div class="formulario">
            <div id="buscar" class="form-group">
                <form action="buscar.php" method="post">
                    <fieldset>
                        <legend>Buscar</legend>
                        <input type="text" name="buscar" id="buscar">
                        <input type="submit" value="Buscar">
                    </fieldset>
                </form>
            </div>
            <?php
            if(!isset($_SESSION['usuario'])){?>
            <div id="login" class="form-group">
                <form action="logeo.php" method="post" >
                    <fieldset>
                        <legend>Login</legend>
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" required>
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" name="password" id="password" required><br>
                        <input type="submit" value="Entrar">
                    </fieldset>
                </form>
            </div>

            <div id="registrarse" class="form-group">
                <form action="registrarte.php" method="post" >
                    <fieldset>
                        <legend>Registrarse</legend>
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" required>
                        <label for="Contraseña1">Contraseña</label>
                        <input type="password" name="password1" id="password1" required>
                        <label for="Contraseña2">Repite la Contraseña</label>
                        <input type="password" name="password2" id="password2" required>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" required>
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" required>
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha"><br>
                        <input type="submit" value="Registrarte">
                    </fieldset>
                </form>
            </div>
            <?php }else{?>
            <div id="logeado">
                <p><?php if(isset($_SESSION['usuario'])){
                                echo "Bienvenido, ".$_SESSION['usuario'];
                           } 
                ?></p>
                <ul>
                    <a href="crearEntrada.php"><li>Crear Entrada</li></a>
                    <a href="crearCategoria.php"><li>Crear Categoria</li></a>
                    <a href="misDatos.php"><li>Mis datos</li></a>
                    <a href="cerrarSeccion.php"><li>Cerrar Sección</li></a>
                </ul>
            </div>
            <?php }?>
        </div>
    </div>
    <?php
        mysqli_close($conexion);
        require_once("footer.php");
    ?>
</body>
</html>
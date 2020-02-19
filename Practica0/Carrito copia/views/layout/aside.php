 <div id="aside">  
   

    <div class="row">

        <h4>Mi carrito</h4>
        <ul>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Total</a></li>
            <li><a href="#">Ver carrito</a></li>
        </ul>
      
    </div>       

    <?php 
       if(!isset($_SESSION['user']) && !isset($_SESSION['admin']) ){ 

    ?>
        <div class="row">
            <h1>Entrar en la Web</h1><br>

            <form action="index.php?c=Usuario&&a=IniciarSesion" method="POST" enctype="multipart/form-data">
        
                <label for="email">Email</label>
                <input type="email" value="email" name="email" required>
        
                <br>
            
        
                <label for="password">Contraseña</label>
                <input type="password" value="password" name="password" required>
            
                <br><br><br>
                <input type="submit" name="submit" value="Iniciar Sesión">
            </form>
        
        </div>


       <?php 
       }else{

            if(isset($_SESSION['user'])){     
                $nombre= $_SESSION['user']->nombre;       
   ?>
            <div class="row"  >
                    <span><?=$nombre?></span>
                    <ul>              
<?php
            }
            if($_SESSION['admin']){   
                
            ?>  
             
                  
                <li><a href="#">Gestionar categorías</a></li>
                <li><a href="#">Gestionar Productos</a></li>
                <li><a href="#">Gestionar pedidos</a></li>
<?php
            }
    ?>

                <li><a href="#">Mis pedidos</a></li>
                <li><a href="index.php?c=Usuario&&a=cerrarSesion">Cerrar Sesión</a></li>
                </ul>
                        
            </div>

          
    <?php
            }   
     
       ?>
    
</div>    
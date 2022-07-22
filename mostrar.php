<?php

$inc = include("con_db.php");
if ($inc){
    $consulta = "SELECT * FROM comentario";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $usuario = $row['usuario'];
            $edad = $row['edad'];
            $email = $row['email'];
            $comentario = $row['comentario'];
            ?>
            
            <div>
             <h2> <?php echo $usuario; ?> </h2>
                <div>
                     <p> Edad:  <?php echo  $edad; ?></p>
                     <p> Email:  <?php echo  $email; ?></p>
                     <p> Comentario:  <?php echo  $comentario; ?></p>
                     <br>
                 </div>
            </div>

            <?php 
        }
    }
}

?>
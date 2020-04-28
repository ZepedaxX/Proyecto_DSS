<div class="container">


  <?php
  include("include/cabecera.php");
  ?>


  
  <h4>Edición de usuarios</h4>
  <div class="row-fluid">
    
    <?php
    extract($_GET);
    //require("connect_db.php");
    if(!function_exists('classAutoLoader')){
           function classAutoLoader($classname){
           $classname = strtolower($classname);
           $classFile = "class/" . $classname . '.class.php';
           if(is_file($classFile) && !class_exists($classname)) include $classFile;
           }
          }
          
          spl_autoload_register('classAutoLoader');
  $db = Database::getInstance();
  $mysqli = $db->getConnection();

    $sql="SELECT * FROM Usuario WHERE idUsuario=$idUsuario";
  //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
      $idUsuario=$row[0];
      $user=$row[1];
      $email=$row[4];
    }

 
  $mysqli->close();

    ?>

    <form action="ejecutaactualizar.php" method="post">
      <input type="text" class="form-control" style="display: none;" name="idUsuario" value="<?php echo $idUsuario?>" readonly>
      Usuario<br> <input type="text"  class="form-control"  name="user" value="<?php echo $user?>"><br>
      Correo usuario<br> <input type="text" class="form-control"  name="email" value="<?php echo $email?>"><br>
      <br>
      <input type="submit" value="Guardar" class="btn btn-success btn-primary">
      <a href="Usuarios.php"><input type="button" class="btn btn-danger btn-primary" value="Cancelar" ></a>
    </form> 
  </div>  
  <br/>

</div>
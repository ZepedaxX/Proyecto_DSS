<div class="container">


  <?php
  include("include/cabecera.php");
  ?>


  
  <h4>Edición de Categoria</h4>
  <div class="row-fluid">
    
    <?php
    extract($_GET);
    require("connect_db.php");

    $sql="SELECT * FROM Categoria WHERE idCategoria=$idCategoria";
  //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
      $idCategoria=$row[0];
      $NombreC=$row[1];
    }



    ?>

    <form action="ejecutaactualizarCate.php" method="post">
      <input type="text" class="form-control" style="display: none;" name="idCategoria" value="<?php echo $idCategoria?>" readonly>
      Nombre Categoria<br> <input type="text" class="form-control"  name="NombreC" value="<?php echo $NombreC?>"><br>
      <br>
      <input type="submit" value="Guardar" class="btn btn-success btn-primary">
      <a href="Categorias.php"><input type="button" class="btn btn-danger btn-primary" value="Cancelar" ></a>
    </form> 
  </div>  
  <br/>

</div>
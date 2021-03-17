<?php
if ($_POST)
{
  include_once 'conexion.php';
  $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
  if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT * FROM `usuarios` WHERE `uid` = ? LIMIT 1;";
  $pst = $mysqli->prepare($query);
  $pst->bind_param('s', $_POST['valorDni']);
  $result = $pst->execute();
  $resultado = $pst->get_result();
  if ($pst->affected_rows > 0){
    $obj = $resultado->fetch_assoc();
    echo '<div class="alert alert-primary" role="alert">El usuario '.$obj["nombre"].' '.$obj["apellido"].' tiene como dni: '.$obj["dni"].'.</div>';
  }else{
    echo '<div style="text-align: center;" class="alert alert-danger" role="alert">
    No se encontró un usuario con ese dni.</div>';
  }
  //$pst->bind_param('i', $_POST['dni']);
  /*if ($pst->execute()){
    $result = $pst->get_result();
    while ($obj = $result->fetch_object()){
      $output[] = $obj;
    }
    
  }
  else{
    echo "error";
  }*/
}
$mysqli->commit();
//$resultado->close();
$mysqli->close();
//header("Location:cargar.html");
//echo "<a href='cargar.html'>Regresar</a>"; 
?>
<?php
if (is_numeric($_POST['dni']) && is_numeric($_POST['opcion']))
{
  include_once 'conexion.php';
  $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
  if ($mysqli->connect_errno) {
      printf("Falló la conexión: %s\n", $mysqli->connect_error);
      exit();
  };
  if($_POST['opcion'] == 2){  
    $query = "UPDATE `usuarios` SET infectado = '0' WHERE dni = ? LIMIT 1;";
    $busc = "SELECT `uid` FROM usuarios WHERE dni='".$_POST['dni']."';";
    $encontrar = $mysqli->query($busc);
    while ($borrar = $encontrar->fetch_assoc()){
      $noInf = "UPDATE usuarios a INNER JOIN contagios b ON a.uid = b.uid_contagiado SET infectado = 0 WHERE b.uid_infectado = '".$borrar['uid']."';";
      $mysqli->query($noInf);
      $dni = "SELECT uid_contagiado AS tar FROM contagios WHERE uid_infectado= '".$borrar['uid']."';";
      $dniQuery = $mysqli->query($dni);
      while ($dniFetch = $dniQuery->fetch_assoc()){
        $elim = "DELETE a.* FROM contagios a INNER JOIN usuarios b ON a.uid_contagiado=b.uid WHERE uid_infectado = '".$borrar['uid']."' AND b.uid = '".$dniFetch['tar']."';";
        $mysqli->query($elim);
      }
    }
  }else if($_POST['opcion']==1){
    $query = "DELETE FROM `usuarios` WHERE dni = ? LIMIT 1";
  }
  else {
    echo json_encode("error");
  }
  $sql = "SELECT * FROM `usuarios` WHERE dni = ".$_POST['dni']." AND infectado = 0 LIMIT 1;";
  $pst = $mysqli->prepare($query);
  $pst->bind_param('i', $_POST['dni']);
  $pst->execute();
  $total = $pst->affected_rows;
  $control = $mysqli->query($sql);
  if ($total > 0 && $_POST['opcion']==1){
    echo json_encode('eliminado');
  }else if($total > 0 && $_POST['opcion']==2){
    echo json_encode('negativo');
  }else if($total == 0 && $_POST['opcion']==2){
    if($control){
      echo json_encode('curado');
    }
    else{
      echo json_encode('error');
    }
  }else{
  echo json_encode('error');
  }
}
$mysqli->commit();
$pst->close();
$mysqli->close();

?>
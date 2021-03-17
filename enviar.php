<?php
if (isset($_POST ["submit"])) 
{
  //GET = mysqli_real_scape
  include_once 'conexion.php';
  $sql->begintransaction();
  $sql = "INSERT INTO `usuarios`(`nombre`, `apellido`, `dni`, `telefono`, `direccion`, `ciudad`, `provincia`, `email`, `uid`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
  $pst = mysqli_prepare($sql);
  $finalizado = false;
  $pst->bind_param("ssiisssss",  $_POST["nombre"], $_POST["apellido"], $_POST["dni"], $_POST["phone"], $_POST["adress"], $_POST["ciudad"], $_POST["provincia"], $_POST["email"], $_POST["uid"]);
  $pst->execute();
  //$result = mysqli_query($conn, $pst);
  if ($pst)
  {
    $sql->commit();
  }
  else
  {
    $sql->rollback();
  }
}
$sql->close;
?>
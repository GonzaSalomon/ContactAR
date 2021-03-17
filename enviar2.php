<?php
if ($_POST)
{
  include_once 'conexion.php';
  $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
  if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "INSERT INTO `usuarios`(nombre, apellido, dni, telefono, direccion, ciudad, provincia, email, uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
  $pst = $mysqli->prepare($query);
  
  //if ($mysqli->query("INSERT INTO `usuarios`(nombre, apellido, dni, telefono, direccion, ciudad, provincia, email, uid ) VALUES ('Gonzalo', 'Salomon', '38274176', '3878511213', 'España65', 'Embarcacion', 'Salta', 'gonzalosalomon@outlook.com','auiod32');") === TRUE)
  //{
  //print("--------------------------Los datos se insertaron correctamente--------------------------");
  //} else {
  //echo "error";
  //}

//, ?, ?, ?, ?, ?, ?, ?)");
  $pst->bind_param('ssiisssss',  $_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['phone'], $_POST['adress'], $_POST['ciudad'], $_POST['provincia'], $_POST['email'], $_POST['uid']);
  
if ($pst->execute())
  {
  echo json_encode('--------------------------Los datos se insertaron correctamente--------------------------');
  } else {
  echo json_encode("error");
  }
}

$mysqli->commit();
$pst->close();
$mysqli->close();
//header("Location:cargar.html");
//echo "<a href='cargar.html'>Regresar</a>"; 
?>
<?php
if ($_POST['fecha'] && is_numeric($_POST['cod']) && is_numeric($_POST['uid']))
{
  include_once 'conexion.php';
  function trazar($consulta){
  }
  $dni = $_POST['uid'];
  $cod = $_POST['cod'];
  $fecha = strtotime($_POST['fecha']);
  $hoy = getdate();
  $diff = $hoy[0] - $fecha;
  $fecha += 36000;
  $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
  if($cod=='1'){
    $estado = 'covid positivo';
  }else{
    $estado = 'contacto directo';
  }
  if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
  }
  //DISTINCT
  $infeccion = "UPDATE `usuarios` SET infectado = ".$cod." WHERE dni = ".$dni.";";
  $cont = "SELECT `dni` FROM `usuarios` WHERE `dni` = '".$dni."' AND `infectado` = ".$cod.";";
  $pst = $mysqli->query($infeccion);
  $inf = $mysqli->affected_rows;
  $exist = $mysqli->query($cont);
  if($inf > 0){
    echo '<div class="alert alert-primary" role="alert">Se notificó la infección con éxito.</div>';
    ?>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Trazabilidad Generada</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th>Nombre</th>
      <th>DNI</th>
      <th>Dirección</th>
      <th>Estado</th>
      <th>Teléfono</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT `uid` FROM usuarios WHERE dni='".$dni."';";
    $t1 = date('Y-m-d H:i:s', $fecha);
    $t2 = date('Y-m-d H:i:s', $hoy[0]);
    $pri = $mysqli->query($query);
    $obj = $pri->fetch_assoc();
    $consPri = "SELECT DISTINCT id FROM conexiones WHERE `uid`= '".$obj['uid']."' AND hora BETWEEN '".$t1."' AND '".$t2."';";
    $fetchPri = $mysqli->query($consPri);
    if ($cod == 1){
      $enf = 2;
    }else{
      $enf = 3;
    }
    while ($idPri = $fetchPri->fetch_assoc()){
      $horario = "SELECT hora FROM conexiones WHERE id='".$idPri['id']."' AND `uid`= '".$obj['uid']."' LIMIT 2;";
      $horPri = $mysqli->query($horario);
      $flag = 0;
      while ($horComp = $horPri->fetch_assoc()){
        if ($flag==0){
          $arrHora[0] = $horComp['hora'];
        }else{
          $arrHora[1] = $horComp['hora'];
        }
        $flag += 1;
      }
      if ($flag < 2){continue;}
      $comp = "SELECT hora,conexiones.uid FROM conexiones INNER JOIN usuarios ON conexiones.uid = usuarios.uid WHERE infectado NOT IN (1,2) AND id = '".$idPri['id']."' AND hora BETWEEN '".$arrHora[0]."' AND '".$arrHora[1]."' GROUP BY conexiones.uid;";
      $fetchSec = $mysqli->query($comp);
      while ($idSec = $fetchSec->fetch_assoc()){
        $mysqli->query("UPDATE usuarios SET infectado = '".$enf."' where `uid`= '".$idSec['uid']."';");
        $ult = "SELECT nombre,apellido,dni,direccion,c.estado,telefono FROM usuarios a INNER JOIN covid c ON a.infectado = c.id_infeccion INNER JOIN conexiones b ON a.uid = b.uid WHERE a.`uid`='".$idSec['uid']."' GROUP BY dni;";
        $tabla = $mysqli->query($ult);
        $bandera = $mysqli->affected_rows;
        if ($bandera > 0){
        while ($var = $tabla->fetch_assoc()){
          echo '<tr>
          <td>'.$var["nombre"].' '.$var["apellido"].'</td>
          <td>'.$var["dni"].'</td>
          <td>'.$var["direccion"].'</td>
          <td>'.$var["estado"].'</td>
          <td>'.$var["telefono"].'</td>
          </tr>';
          $contag = "INSERT INTO contagios (uid_infectado, uid_contagiado, id_receptor, hora_contagio) VALUES ('".$obj['uid']."', '".$idSec['uid']."', '".$idPri['id']."', '".$idSec['hora']."')";
          $mysqli->query($contag);
        }
        }
      }
      $mysqli->query("INSERT INTO contagios (uid_infectado, uid_contagiado, id_receptor, hora_contagio) VALUES ('".$obj['uid']."', '".$obj['uid']."', '".$idPri['id']."', '".$t1."')");
    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <?php
  }else if(mysqli_num_rows($exist) > 0){
    echo '<div class="alert alert-warning" role="alert">El usuario ya se encuentra marcado como '.$estado.'</div>';
  }else{
    echo '<div class="alert alert-warning" role="alert">El usuario seleccionado no existe. Por favor revisar y volver a intentar.</div>';
  }

  $mysqli->commit();
  $mysqli->close();
}
?>
<?php
 $IP = '10.100.128.3';
 $dbUser = 'root';
 $dbPass = 'm7PfDbH47JCn2cpC';
 $db = 'pulseras';
echo $db;
echo "<br>";
echo "hola";
$mysqli = new mysqli($IP, $dbUser, $dbPass, $db) or die("Connect failed: %s\n". $mysqli->error);
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//or die("Connect failed: %s\n". $mysqli -> error);
 //return $conn;
echo "<br>";
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($mysqli) . PHP_EOL;
return $mysqli;
//mysqli_close($mysqli);
//return $mysqli;
/*
 function CloseCon($conn)
 {
 $conn -> close();
 }
*/
 /*$conn = new mysqli(null,$USER,$PASS,$DB);
 if($conn != null) {
    print("Connected! :*");
    mysqli_close($conn);
 } else {
    print("Can't connect! :(");
 }*/
?>

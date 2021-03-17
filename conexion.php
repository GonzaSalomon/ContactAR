<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "datos-pulsera";
 $mysqli = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 if ($mysqli -> connect_errno) {
   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
   exit();
 }
 return $mysqli;
?>
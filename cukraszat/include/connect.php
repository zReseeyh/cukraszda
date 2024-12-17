<?php
header("Content-Type: text/html; charset=utf-8");
define("DBHOST", "localhost"); 
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "cukrasz"); // adatbázis neve

// Kapcsolat paraméterek
$dbconn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
or die("Hiba a kapcsolódás során!");

// Kapcsolat létrehozás
mysqli_query($dbconn, "SET NAMES utf8");
?>
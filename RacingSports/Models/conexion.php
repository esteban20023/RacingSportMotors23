<?php
$mysqli = new mysqli("localhost", "root", "Sena23", "gpamotors");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "Sena23", "gpamotors", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
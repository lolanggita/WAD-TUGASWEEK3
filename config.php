<!-- config database -->
<?php

$databaseHost = 'localhost';
$databaseName = 'wad_handson';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
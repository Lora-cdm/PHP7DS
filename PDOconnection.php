<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "php6ds"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "Connected";
} catch (Exception $e) {
    echo "Not Connected";
}
?>

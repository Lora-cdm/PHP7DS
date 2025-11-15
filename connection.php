<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "php6ds"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $sql = "CREATE DATABASE testdd";  // <-- semicolon added
    $conn->exec($sql);

    echo "Connected & Database Created";

} catch (Exception $e) {
    echo "Not Connected: " . $e->getMessage();
}
?>

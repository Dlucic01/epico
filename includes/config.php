<?php
// config.php
$host     = 'localhost';
$db       = 'g-string';
$user     = 'exof';
$password = 'Mumija12';

//connect.php
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($dsn, $user, $password);
   
    if ($pdo) {
        echo "";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

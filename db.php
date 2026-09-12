<?php
$host = 'localhost';
$dbname = 'cyberatech_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connection successful
} catch (PDOException $e) {
    echo "Database Connection Failed: " . $e->getMessage();
}
?>

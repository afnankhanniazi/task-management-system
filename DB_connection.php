<?php  
$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;charset=utf8mb4", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
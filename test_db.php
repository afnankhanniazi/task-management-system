<?php
include 'DB_connection.php';
$sql = "SHOW COLUMNS FROM tasks";
$stmt = $conn->prepare($sql);
$stmt->execute();
$columns = $stmt->fetchAll();
print_r($columns);
?>

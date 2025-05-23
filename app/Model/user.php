<?php
function get_all_user($conn)
{
    $sql = "SELECT * FROM users Where  role =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["employee"]);

if ($stmt->rowCount() > 0) {
        $users = $stmt->fetchAll();
    } else {
        $users = 0;
    }
return $users;
}
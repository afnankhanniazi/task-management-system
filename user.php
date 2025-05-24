<?php
session_start();
if (isset($_SESSION['role']) && isset($_SESSION ['id'])) 
{
include "DB_connection.php";
include "app/Model/User.php";
$users = get_all_user($conn);
//print_r($users);
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Manage Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	    <?php include 'inc/header.php'; ?>
	<div class="body">
        <?php include 'inc/nav.php'; ?>
		<section class="section-1">
		<h4 class="title"> Manage User <a href="add-user.php" >Add User</a></h4>

        <?php if($users !=0 ){
?>
        <table class="main-table">
<tr>
             <th>#</th>
             <th>Full Name</th>
             <th>Username</t>  
             <th>Role</th>
            <th>Action</th>         
</tr>
<?php $i=0; foreach($users as $user)   {  ?>
<tr>
         <td><?=++$i?></td>
         <td><?=$user['full_name']?></td>
        <td><?=$user['username']?></td>   
        <td><?=$user['role']?></td>
        <td>
            <a href="edit-user.php?id=<?=$user['id']?>" class="edit-btn" >Edit</a>
            <a href="delete-user.php?id=<?=$user['id']?>" class="delete-btn">Delete</a>
        </td>
        
</tr>
<?php
        }
        ?>
        </table>
     <?php
        }
        else
        {
            ?>  
            <h3>No Users Found</h3>
            <?php
        }
        ?>
		</section>
	</div>
    <script type="text/javascript" >
var active = document.querySelector("#navlist li:nth-child(3)");
active.classList.add("active");
    </script>

</body>
</html>
<?php
}
else
{
 $em = "Login First";
    header("Location: login.php?error=$em");
    exit();
}
	?>

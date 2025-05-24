<?php
session_start();
if (isset($_SESSION['role']) && isset($_SESSION ['id'])) 
{
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Add Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	    <?php include 'inc/header.php'; ?>
	<div class="body">
        <?php include 'inc/nav.php'; ?>
		<section class="section-1">
		<h4 class="title">Add Users<a href="user.php" >Users</a></h4>

     
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

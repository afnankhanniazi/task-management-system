<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Task <b>Pro</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-bell" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.jpg">
				<h4>Bhaii Log</h4>
			</div>
			
			 <?php
			 $user = "admin";
			 if ($user=="employee") {
			 ?>
			 <!-- Employee navigation bar-->
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>My Task</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notification</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>

			<?php } else {?>
				<!-- Admin navigation bar-->
				<ul>
				<li>
					<a href="#">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<span>Manage Users</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>Create Task</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>All Task</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notification</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>   
				<?php } ?> 


		</nav>
		<section class="section-1">
			
		</section>
	</div>

</body>
</html>
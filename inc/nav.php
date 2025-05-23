<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.jpg">
				<h4>@<?=$_SESSION['username']?></h4>
			</div>
		
			 <?php
			// $user = "admin"; 
			 if ($_SESSION['role']=="employee") {
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
					<a href="Logout.php">
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
					<a href="logout.php">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>   
				<?php } ?> 

		</nav>
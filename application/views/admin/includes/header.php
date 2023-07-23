<?php
if (!($this->session->userdata('loggedIn'))) {
	redirect('Home/login');
}
?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-Library</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
</head>

<body>
	<div class="container mt-5 nav-div">
		<nav class="navbar navbar-expand-lg bg-body-tertiary px-3 shadow-sm" data-bs-theme="light">
			<div class="container-fluid">
				<a class="navbar-brand me-lg-4" href="<?php echo base_url('index.php/Dashboard/index'); ?>">e-Library</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav me-auto mb-2 mb-lg-0">
						<span class="nav-item me-lg-4">
							<a class="nav-link" href="<?php echo base_url('index.php/Dashboard/index'); ?>">Home</a>
						</span>

						<!-- Books -->
						<span class="nav-item dropdown me-lg-4">
							<span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Books
							</span>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo base_url('index.php/Book/index'); ?>">Library Books</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url('index.php/Book/add_new'); ?>">Add New Books</a></li>
								<li><a class="dropdown-item" href="#">Issue Books</a></li>
								<li><a class="dropdown-item" href="#">Return Books</a></li>
							</ul>
						</span>

						<!-- Members -->
						<span class="nav-item dropdown me-lg-4">
							<span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Members
							</span>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo base_url('index.php/Member/index'); ?>">Library Members</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url('index.php/Member/add_new'); ?>">Add New Members</a></li>
							</ul>
						</span>

						<!-- Users -->
						<span class="nav-item dropdown me-lg-4">
							<span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Users
							</span>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">System Users</a></li>
								<li><a class="dropdown-item" href="#">Add New Users</a></li>
							</ul>
						</span>
					</div>
					<span class="nav-item dropdown">
						<span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Hasintha
						</span>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="#">My Profile</a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="<?php echo base_url('index.php/Authentication/logout'); ?>">Logout</a></li>
						</ul>
					</span>
				</div>
			</div>
		</nav>
	</div>
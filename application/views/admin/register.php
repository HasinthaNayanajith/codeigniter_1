<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-Library</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
</head>

<body>
	<main>
		<div class="container mt-5">
			<div class="row mt-5">
				<div class="col-lg-4 col-sm-6 offset-lg-4 offset-sm-3">
					<div class="text-center">
						<h3>Register</h3>
					</div>
					<hr>
					<form>
						<div class="mb-3">
							<label for="firstname" class="form-label">First Name</label>
							<input type="text" class="form-control" name="firstname" id="firstname">
						</div>
						<div class="mb-3">
							<label for="lastname" class="form-label">Last Name</label>
							<input type="text" class="form-control" name="lastname" id="lastname">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email address</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">New Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="mb-3">
							<label for="confirm-password" class="form-label">Confirm Password</label>
							<input type="password" class="form-control" name="confirm_password" id="confirm-password">
						</div>
						<button type="submit" class="btn btn-primary w-100">Register</button>
					</form>
					<div class="text-center mt-5">
						<span>Already have an account? Login <a href="<?php echo base_url('index.php/Authentication/login'); ?>">here</a>.</span>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>

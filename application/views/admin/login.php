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
						<h3>Login</h3>
					</div>
					<hr>
					<!-- <div class="alert alert-danger" role="alert">
						<?php echo validation_errors(); ?>
					</div> -->
					<?php
					if ($this->session->flashdata('errmsg')) {
						echo "<div class='alert alert-danger'>" . $this->session->flashdata('errmsg') . "</div>";
					}
					?>

					<?php echo form_open('Authentication/login'); ?>

					<form>
						<div class="mb-3">
							<label for="email" class="form-label">Email address</label>
							<input type="email" class="form-control mb-2" name="email" id="email" value="<?php echo set_value('email'); ?>">
							<?php echo "<span class='text-danger'>" . form_error('email') . "</span>"; ?>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control mb-2" name="password" id="password">
							<?php echo "<span class='text-danger'>" . form_error('password') . "</span>"; ?>
						</div>
						<button type="submit" class="btn btn-primary w-100">Login</button>
					</form>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</main>
</body>

</html>

<?php
include('includes/header.php');
?>

<main>
	<!-- Cards -->
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h3 class="mb-4">New Member Registration</h3>
				<!-- <div class="alert alert-danger" role="alert">
						<?php echo validation_errors(); ?>
					</div> -->
				<?php
				if ($this->session->flashdata('errmsg')) {
					echo "<div class='alert alert-danger'>" . $this->session->flashdata('errmsg') . "</div>";
				}
				?>

				<?php echo form_open('Member/addNewMember'); ?>

				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="nic" class="form-label">National Identity Number</label>
								<input type="text" class="form-control mb-2" name="nic" id="nic" value="<?php echo set_value('nic'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('nic') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="fullname" class="form-label">Full Name</label>
								<input type="text" class="form-control mb-2" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('fullname') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="address" class="form-label">Address</label>
								<input type="text" class="form-control mb-2" name="address" id="address" value="<?php echo set_value('address'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('address') . "</span>"; ?>
							</div>
						</div>

						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="birthday" class="form-label">Birthday</label>
								<input type="date" class="form-control mb-2" name="birthday" id="birthday">
								<?php echo "<span class='text-danger'>" . form_error('birthday') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="mobile" class="form-label">Mobile Number</label>
								<input type="text" class="form-control mb-2" name="mobile" id="mobile" value="<?php echo set_value('mobile'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('mobile') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email Address</label>
								<input type="text" class="form-control mb-2" name="email" id="email" value="<?php echo set_value('email'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('email') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="regDate" class="form-label">Register Date</label>
								<input type="date" class="form-control mb-2" name="regDate" id="regDate" value="<?php echo date("Y-m-d") ?>">
								<?php echo "<span class='text-danger'>" . form_error('regDate') . "</span>"; ?>
							</div>
							<div class="d-flex mt-3">
								<button type="submit" class="btn btn-primary w-50 mt-5 me-2">Submit</button>
								<a href="<?php echo ($this->session->userdata('reffered_from')); ?>" type="submit" class="btn btn-secondary w-50 mt-5">Back</a>
							</div>
						</div>
					</div>
				</form>

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
</main>

<?php
include('includes/footer.php');
?>
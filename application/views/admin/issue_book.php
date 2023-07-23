<?php
include('includes/header.php');
?>

<main>
	<!-- Cards -->
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h3 class="mb-4">Issue Books</h3>
				<!-- <div class="alert alert-danger" role="alert">
						<?php echo validation_errors(); ?>
					</div> -->
				<?php
				if ($this->session->flashdata('errmsg')) {
					echo "<div class='alert alert-danger'>" . $this->session->flashdata('errmsg') . "</div>";
				}
				?>

				<?php echo form_open('Book/issueBook'); ?>

				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="book" class="form-label">Book ID</label>
								<input type="text" class="form-control mb-2" name="book" id="book" value="<?php echo set_value('book'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('book') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="member" class="form-label">Member ID</label>
								<input type="text" class="form-control mb-2" name="member" id="member" value="<?php echo set_value('member'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('member') . "</span>"; ?>
							</div>
						</div>

						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="returndate" class="form-label">Return Date</label>
								<input type="date" class="form-control mb-2" name="returndate" id="returndate" value="<?php $date = date("Y-m-d");
																														echo date("Y-m-d", strtotime($date . ' + 13 days')); ?>">
								<?php echo "<span class='text-danger'>" . form_error('returndate') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="isuuedate" class="form-label">Issuing Date</label>
								<input type="date" class="form-control mb-2" name="isuuedate" id="isuuedate" value="<?php echo date("Y-m-d") ?>">
								<?php echo "<span class='text-danger'>" . form_error('isuuedate') . "</span>"; ?>
							</div>
							<div class="d-flex">
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

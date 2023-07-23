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

				<?php echo form_open('Book/addNewBook'); ?>

				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="isbn" class="form-label">ISBN</label>
								<input type="text" class="form-control mb-2" name="isbn" id="isbn" value="<?php echo set_value('isbn'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('isbn') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control mb-2" name="title" id="title" value="<?php echo set_value('title'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('title') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="author" class="form-label">Author</label>
								<input type="text" class="form-control mb-2" name="author" id="author">
								<?php echo "<span class='text-danger'>" . form_error('author') . "</span>"; ?>
							</div>
						</div>

						<div class="col-lg-6 col-sm-12 ">
							<div class="mb-3">
								<label for="rack" class="form-label">Rack Number</label>
								<input type="text" class="form-control mb-2" name="rack" id="rack" value="<?php echo set_value('rack'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('rack') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="edition" class="form-label">Edition</label>
								<input type="text" class="form-control mb-2" name="edition" id="edition" value="<?php echo set_value('edition'); ?>">
								<?php echo "<span class='text-danger'>" . form_error('edition') . "</span>"; ?>
							</div>
							<div class="mb-3">
								<label for="regDate" class="form-label">Register Date</label>
								<input type="date" class="form-control mb-2" name="regDate" id="regDate" value="<?php echo date("Y-m-d") ?>">
								<?php echo "<span class='text-danger'>" . form_error('regDate') . "</span>"; ?>
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

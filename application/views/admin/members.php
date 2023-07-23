<?php
include("includes/header.php");
$this->session->set_userdata('reffered_from', current_url());
?>

<main>
	<!-- Cards -->
	<div class="container pt-5">
		<h3 class="mb-4">Members</h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th>
					<th scope="col">Full Name</th>
					<th scope="col">Address</th>
					<th scope="col">Mobile</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>

				<?php $count = 1;
				foreach ($members as $member) : ?>

					<tr>
						<th class="align-middle" scope="row"><?php echo $count; ?></th>
						<td class="align-middle"><?php echo $member['id']; ?></td>
						<td class="align-middle"><?php echo $member['fullname']; ?></td>
						<td class="align-middle"><?php echo $member['address']; ?></td>
						<td class="align-middle"><?php echo $member['mobile']; ?></td>

						<td>
							<div class="d-flex flex-row">
								<a href="" class="btn btn-primary me-2"><i class="bi bi-eye"></i></a>
								<a href="" class="btn btn-danger me-2"><i class="bi bi-trash"></i></a>
								<!-- <?php if ($book['availability'] == 1) {
											echo "<a href='' class='btn btn-success'><i class='bi bi-box-arrow-in-up'></i></a>";
										} else {
											echo "<a href='' class='btn btn-warning'><i class='bi bi-box-arrow-in-down'></i></a>";
										}
										?> -->
							</div>
						</td>
					</tr>

					<?php $count++; ?>

				<?php endforeach; ?>

			</tbody>
		</table>

	</div>
</main>

<?php
include("includes/footer.php");
?>
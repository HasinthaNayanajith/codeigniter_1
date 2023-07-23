<?php
include("includes/header.php");
$this->session->set_userdata('reffered_from', current_url());
?>

<main>
	<!-- Cards -->
	<div class="container pt-5">
		<h3 class="mb-4">Books</h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">ISBN</th>
					<th scope="col">Title</th>
					<th scope="col">Availability</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>

				<?php $count = 1;
				foreach ($books as $book) : ?>

					<tr>
						<th class="align-middle" scope="row"><?php echo $count; ?></th>
						<td class="align-middle"><?php echo $book['isbn']; ?></td>
						<td class="align-middle"><?php echo $book['title']; ?></td>
						<?php if ($book['availability'] == 1) {
							echo "<td class='align-middle'><span class='badge text-bg-success'>Available</span></td>";
						} else {
							echo "<td class='align-middle'><span class='badge text-bg-warning'>Not Available</span></td>";
						}
						?>

						<td>
							<div class="d-flex flex-row">
								<a href="" class="btn btn-primary me-2"><i class="bi bi-eye"></i></a>
								<a href="" class="btn btn-danger me-2"><i class="bi bi-trash"></i></a>
								<?php if ($book['availability'] == 1) {
									echo "<a href='' class='btn btn-success'><i class='bi bi-box-arrow-in-up'></i></a>";
								} else {
									echo "<a href='' class='btn btn-warning'><i class='bi bi-box-arrow-in-down'></i></a>";
								}
								?>
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

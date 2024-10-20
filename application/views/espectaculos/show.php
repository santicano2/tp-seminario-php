<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="mb-4 bg-dark bg-opacity-50 rounded-3 p-4">
	<h1 class="text-center text-white my-3 fw-bold text-decoration-underline"><?php echo $title; ?></h1>
	<div class="d-flex justify-content-center">
		<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>" alt="<?php echo $espectaculo->name; ?>" width="100">
	</div>
	<div class=" d-flex justify-content-center gap-5">
		<div class="text-center">
			<h3>Tickets</h3>
			<p><?php echo $espectaculo->tickets; ?></p>
		</div>
		<div>
			<h3>Precio</h3>
			<p><?php echo '$' . $espectaculo->price; ?></p>
		</div>
	</div>
	<?php if ($this->session->userdata('role') == 'admin'): ?>
		<div class="d-flex justify-content-center">
			<a class="btn btn-warning me-2" href="<?php echo base_url("espectaculos/edit/") . $espectaculo->id; ?>">
				<i class="fa-regular fa-pen-to-square"></i>
			</a>
			<form action="<?php echo base_url('espectaculos/delete/') . $espectaculo->id; ?>" method="post">
				<button class="btn btn-danger" type="submit">
					<i class="fa-solid fa-trash"></i>
				</button>
			</form>
		</div>
	<?php endif; ?>
</div>

<?php $this->load->view('components/buy_form') ?>

<?php if ($this->session->flashdata('success')): ?>
	<script>
		setTimeout(function() {
			window.location.href = "<?php echo base_url('espectaculos'); ?>";
		}, 3000);
	</script>
<?php endif; ?>
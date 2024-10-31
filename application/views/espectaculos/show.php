<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="bg-dark bg-opacity-25 p-3 d-flex align-items-center justify-content-evenly w-100">
	<div class="d-flex">
		<div class="d-flex flex-column justify-content-center">
			<div class="d-flex gap-2 align-items-center justify-content-center">
				<img src="<?php echo base_url('assets/img/movie-icon.svg'); ?>" alt="movie icon" width="30">
				<h1 class="text-white my-3 fw-bold"><?php echo $title; ?></h1>
			</div>
			<div class="d-flex flex-column justify-content-evenly align-items-start gap-3">
				<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>" alt="<?php echo $espectaculo->name; ?>" width="300">
				<div class=" d-flex justify-content-center gap-5">
					<div class="text-center">
						<p class="fw-bold text-info m-0">Tickets</p>
						<p><?php echo $espectaculo->tickets; ?></p>
					</div>
					<div class="text-center">
						<p class="fw-bold text-info m-0">Precio</p>
						<p><?php echo '$' . $espectaculo->price; ?></p>
					</div>
					<div class="text-center">
						<p class="fw-bold text-info m-0">Duración</p>
						<p><?php
								$horas = floor($espectaculo->duracion / 60);
								$minutos = $espectaculo->duracion % 60;
								echo "{$horas}h {$minutos}min";
								?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php if ($this->session->userdata('role') == 'admin'): ?>
			<div class="d-flex justify-content-center align-items-start gap-2 mt-4 mx-3">
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

	<div>
		<?php $this->load->view('components/buy_form', ['disabled' => $this->session->flashdata('success')]); ?>
	</div>
</div>

<div class="bg-dark bg-opacity-25 d-flex flex-column justify-content-center align-items-center">
	<h4 class="px-3 text-decoration-underline">Descripción</h4>
	<p class="px-3" style="max-width: 60%;"><?php echo $espectaculo->descripcion; ?></p>
</div>


<?php if ($this->session->flashdata('success')): ?>
	<script>
		setTimeout(function() {
			window.location.href = " <?php echo base_url('espectaculos/confirmacion'); ?>";
		}, 3000);
	</script>
<?php endif; ?>
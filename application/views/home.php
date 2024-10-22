<style>
	.carousel-img {
		height: 350px;
		object-fit: contain;
	}

	.hover {
		transition: all 0.3s ease-in-out;

		&:hover {
			cursor: pointer;
			transform: scale(1.02);
		}
	}
</style>

<div class="d-flex flex-column justify-content-center align-items-center">
	<h1 class="mt-5">MÁS VISTAS</h1>
	<div id="carouselEspectaculos" class="carousel slide w-100" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php foreach ($espectaculos as $index => $espectaculo): ?>
				<div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
					<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>">
						<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>"
							class="d-block w-100 carousel-img" alt="<?php echo $espectaculo->name; ?>">
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselEspectaculos" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselEspectaculos" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="container mt-5">
		<h2>CARTELERA</h2>
		<div class="row">
			<?php foreach ($espectaculos as $espectaculo): ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
					<div class="card h-100 border border-2 border-info rounded-0 text-white hover" style="width: 100%;">
						<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>">
							<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>" class="card-img-top" alt="<?php echo $espectaculo->name; ?>" style="height: 400px; object-fit: cover;">
						</a>
						<div class="card-body bg-black text-center">
							<h5 class="card-title">
								<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>" class="text-decoration-none text-info">
									<?php echo $espectaculo->name; ?>
								</a>
							</h5>
							<?php if ($espectaculo->tickets == 0): ?>
								<div class="text-danger fw-bold">AGOTADO</div>
							<?php elseif ($espectaculo->tickets <= 10): ?>
								<div class="text-warning fw-bold">Últimos tickets</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</div>
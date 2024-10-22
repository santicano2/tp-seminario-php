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
	<h1 class="mt-5">Más vistas</h1>
	<div id="carouselEspectaculos" class="carousel slide w-100" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php foreach ($espectaculos as $index => $espectaculo): ?>
				<div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
					<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>">
						<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>"
							class="d-block w-100 carousel-img" alt="<?php echo $espectaculo->name; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5><?php echo $espectaculo->name; ?></h5>
						</div>
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

	<div class="container-fluid mt-5">
		<h2>CARTELERA</h2>
		<div class="row">
			<?php foreach ($espectaculos as $espectaculo): ?>
				<div class="col-sm-2 col-md-3 mb-4">
					<div class="card h-100 border border-2 border-info rounded-0 text-white hover" style="width: 14rem;">
						<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>">
							<img src="<?php echo base_url('assets/img/uploads/' . $espectaculo->image); ?>" class="card-img-top" alt="<?php echo $espectaculo->name; ?>" style="height: 300px; object-fit: fit;">
						</a>
						<div class="card-body bg-black text-center">
							<h5 class="card-title">
								<a href="<?php echo base_url('espectaculos/show/' . $espectaculo->id); ?>" class="text-decoration-none text-info">
									<?php echo $espectaculo->name; ?>
								</a>
							</h5>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>


</div>
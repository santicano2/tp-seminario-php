<style>
	.carousel-img {
		height: 380px;
		object-fit: cover;
	}
</style>

<div class="d-flex flex-column justify-content-center align-items-center">
	<h1>CINE MONTE GRANDE</h1>
	<div id="carouselEspectaculos" class="carousel slide" data-bs-ride="carousel">
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
</div>
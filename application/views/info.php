<style>
	.carousel-header-img {
		height: 400px;
		object-fit: cover;
	}
</style>

<div class="container">
	<div class="mt-4">
		<h1 class="display-4 text-center">Cine Monte Grande</h1>
		<p class="lead">El cine Monte Grande ofrece una variedad de proyecciones de películas para todas las edades. Con cómodas instalaciones, modernas salas equipadas con tecnología de proyección digital y sonido envolvente, es un punto de encuentro para los amantes del cine. Además de estrenos, suele ofrecer funciones de cine nacional, infantiles y eventos especiales, brindando a la comunidad un lugar ideal para disfrutar del séptimo arte en un ambiente familiar y accesible.</p>
	</div>
	<div id="carouselHeader" class="carousel slide mb-3" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('assets/img/cine1.jpg'); ?>" class="d-block w-100 carousel-header-img" alt="Cine Monte Grande">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/cine2.jpg'); ?>" class="d-block w-100 carousel-header-img" alt="Cine Monte Grande">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/cine3.jpg'); ?>" class="d-block w-100 carousel-header-img" alt="Cine Monte Grande">
			</div>
		</div>
		<button class="carousel-control-prev bg-info bg-opacity-25" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next bg-info bg-opacity-25" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div class="d-flex flex-column align-items-center justify-content-center mb-5">
		<h4>Ubicación</h4>
		<p class="fs-5">Mariano Acosta 56, Monte Grande, Buenos Aires</p>
		<img src="<?php echo base_url('assets/img/mapa.jpg'); ?>" class="d-block w-50" alt="Cine Monte Grande mapa">
	</div>
</div>
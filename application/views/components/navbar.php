<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo base_url('espectaculos'); ?>">Tickets</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						href="#"
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false">
						Espectáculos
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="<?php echo base_url('espectaculos'); ?>">Lista de espectáculos</a>
						</li>
						<li>
							<a class="dropdown-item" href="<?php echo base_url('/espectaculos/create'); ?>">Agregar espectáculo</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						href="#"
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false">
						Usuario
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="<?php echo base_url('auth/register_form'); ?>">Registrarse</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
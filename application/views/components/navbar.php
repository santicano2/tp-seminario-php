<nav class="navbar navbar-expand-lg bg-info bg-opacity-25" data-bs-theme="dark">
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
						<?php if ($this->session->userdata('logged_in')): ?>
							<?php echo $this->session->userdata('email'); ?>
						<?php else: ?>
							Usuario
						<?php endif; ?>
					</a>
					<ul class="dropdown-menu">
						<?php if ($this->session->userdata('logged_in')): ?>
							<li>
								<a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Cerrar sesión</a>
							</li>
						<?php else: ?>
							<li>
								<a class="dropdown-item" href="<?php echo base_url('auth/login_form'); ?>">Iniciar sesión</a>
							</li>
							<li>
								<a class="dropdown-item" href="<?php echo base_url('auth/register_form'); ?>">Registrarse</a>
							</li>
						<?php endif; ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
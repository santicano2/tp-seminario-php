<nav class="navbar navbar-expand-lg bg-info bg-opacity-25" data-bs-theme="dark">
	<div class="container-fluid" style="margin-inline: 14rem;">
		<a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets/img/movie.svg'); ?>" alt="cine monte grande"> Cine Monte Grande</a>
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
						Películas
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="<?php echo base_url('espectaculos'); ?>">Lista de películas</a>
						</li>
						<?php if ($this->session->userdata('role') == 'admin'): ?>
							<li>
								<a class="dropdown-item" href="<?php echo base_url('/espectaculos/create'); ?>">Agregar película</a>
							</li>
						<?php endif; ?>
					</ul>
				</li>
				<?php if ($this->session->userdata('role') == 'admin'): ?>
					<li class="nav-item dropdown">
						<a
							class="nav-link dropdown-toggle"
							href="#"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							Usuarios
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="<?php echo base_url('usuarios'); ?>">Lista de usuarios</a>
							</li>
						</ul>
					</li>
				<?php endif; ?>
				<?php if ($this->session->userdata('role') == 'admin'): ?>
					<li class="nav-item dropdown">
						<a
							class="nav-link dropdown-toggle"
							href="#"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							Ventas
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="<?php echo base_url('ventas'); ?>">Lista de ventas</a>
							</li>
						</ul>
					</li>
				<?php endif; ?>
				<li class="nav-item">
					<a class="nav-link"
						href=" <?php echo base_url('info') ?>">
						Info
					</a>
				</li>
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						href="#"
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false">
						<?php if ($this->session->userdata('logged_in')): ?>
							<?php echo $this->session->userdata('name'); ?>
						<?php else: ?>
							Mi cuenta
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
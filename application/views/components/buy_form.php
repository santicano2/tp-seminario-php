<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>
<?php $success = $this->session->flashdata('success'); ?>
<?php
$hoy = date('Y-m-d');
$fecha_maxima = date('Y-m-d', strtotime('+2 weeks'));
?>

<?php if ($this->session->userdata('logged_in')): ?>
	<?php if ($espectaculo->tickets > 0): ?>
		<h3>Comprar tickets</h3>
		<form action="<?php echo base_url('espectaculos/comprar/') . $espectaculo->id; ?>" method="POST" class="mb-3 d-flex flex-column">
			<input type="hidden" name="espectaculo" id="espectaculo" value="<?php echo $espectaculo->id; ?>">
			<div class="d-flex gap-3">
				<div class="form-group mb-3">
					<label for="cantidad">Cantidad:</label>
					<input type="number" name="tickets" id="tickets" min="1" max="<?php echo $espectaculo->tickets; ?>" class="form-control mt-1" oninput="toggleButton()">
				</div>
				<div class="form-group mb-3">
					<label for="fecha">Fecha de la función:</label>
					<input type="date" name="fecha" id="fecha" class="form-control mt-1" required
						min="<?php echo $hoy; ?>"
						max="<?php echo $fecha_maxima; ?>">
				</div>
			</div>

			<!-- Tipo de asiento -->
			<div class="form-group mb-3">
				<label for="asiento">Tipo de Asiento:</label>
				<select name="asiento" id="asiento" class="form-control">
					<option value="Estándar">Estándar</option>
					<option value="VIP">VIP</option>
					<option value="Accesible">Accesible</option>
				</select>
			</div>

			<!-- Forma de pago -->
			<div class="form-group mb-3">
				<label for="pago">Forma de Pago:</label>
				<select name="pago" id="pago" class="form-control">
					<option value="Tarjeta">Tarjeta de crédito</option>
					<option value="Transferencia">Transferencia bancaria</option>
					<option value="MercadoPago">Mercado Pago</option>
				</select>
			</div>

			<!-- Correo electrónico -->
			<div class="form-group mb-3">
				<label for="emailClient">Correo electrónico:</label>
				<input type="email" name="emailClient" id="emailClient" class="form-control" placeholder="Tu correo para confirmación" required>
			</div>

			<!-- Código promocional -->
			<div class="form-group mb-3">
				<label for="codigo">Código promocional (opcional):</label>
				<input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingresa tu cupón de descuento">
			</div>

			<button type="submit" class="btn btn-success" id="buyButton" disabled>Comprar <i class="fa-solid fa-ticket"></i></button>

			<?php if ($espectaculo->tickets <= 10): ?>
				<div class="alert alert-warning mt-3 fw-bold text-center" role="alert">
					Últimos tickets <i class="fa-solid fa-ticket"></i>
				</div>
			<?php endif; ?>
		</form>

		<?php if (isset($errors)): ?>
			<?php foreach ($errors as $error): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $error; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if (isset($success)): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $success; ?>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<div class="alert alert-danger fw-bold" role="alert">
			No hay tickets disponibles
		</div>
	<?php endif; ?>
<?php else: ?>
	<div class="alert alert-danger fw-bold" role="alert">
		Para comprar tickets, iniciar sesión.
	</div>
<?php endif; ?>

<script>
	function toggleButton() {
		const ticketInput = document.getElementById('tickets');
		const buyButton = document.getElementById('buyButton');
		buyButton.disabled = ticketInput.value < 1 || ticketInput.value > <?php echo $espectaculo->tickets; ?>;
	}
</script>
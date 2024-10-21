<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>
<?php $success = $this->session->flashdata('success'); ?>

<?php if ($this->session->userdata('logged_in')): ?>
	<?php if ($espectaculo->tickets > 0): ?>
		<h3>Comprar tickets</h3>
		<form action="<?php echo base_url('espectaculos/comprar/') . $espectaculo->id; ?>" method="POST" class="mb-3 d-flex flex-column">
			<input type="hidden" name="espectaculo" id="espectaculo" value="<?php echo $espectaculo->id; ?>">
			<div class="form-group mb-3">
				<label for="cantidad">Cantidad:</label>
				<input type="number" name="tickets" id="tickets" min="1" max="<?php echo $espectaculo->tickets; ?>" class="form-control mt-1">
			</div>
			<button type="submit" class="btn btn-success" <?php echo $disabled ? 'disabled' : ''; ?>>Comprar</button>
			<?php if ($espectaculo->tickets < 5): ?>
				<div class="alert alert-warning mt-3 fw-bold" role="alert">
					Ultimos tickets
				</div>
			<?php endif; ?>
		<?php else: ?>
			<div class="alert alert-danger fw-bold" role="alert">
				No hay tickets disponibles
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
			Para comprar tickets, iniciar sesión.
		</div>
	<?php endif; ?>
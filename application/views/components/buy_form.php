<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>
<?php $success = $this->session->flashdata('success'); ?>

<h3>Comprar tickets</h3>
<form action="<?php echo base_url('espectaculos/comprar/') . $espectaculo->id; ?>" method="POST" class="mb-3">
	<input type="hidden" name="espectaculo" id="espectaculo" value="<?php echo $espectaculo->id; ?>">
	<div class="form-group mb-3">
		<label for="cantidad">Cantidad:</label>
		<input type="number" name="cantidad" id="cantidad" min="1" max="<?php echo $espectaculo->tickets; ?>" class="form-control mt-1">
	</div>
	<button type="submit" class="btn btn-success">Comprar</button>
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
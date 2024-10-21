<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-white my-3"><?php echo $title; ?></h1>
<form action="<?php echo base_url('espectaculos/update/') . $espectaculo->id; ?>" method="POST" enctype="multipart/form-data" class="text-light bg-dark rounded-0 border border-2 border-primary p-4">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" value="<?php echo $espectaculo->name; ?>" placeholder="Ingrese el nombre" required>
  </div>
  <div class="mb-3">
    <label for="tickets" class="form-label">Tickets:</label>
    <input type="number" class="form-control bg-white text-dark border" id="tickets" name="tickets" value="<?php echo $espectaculo->tickets; ?>" placeholder="Ingrese el numero de tickets" min="1" max="80" required>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Precio:</label>
    <input type="number" class="form-control bg-white text-dark border" id="price" name="price" value="<?php echo $espectaculo->price; ?>" placeholder="Ingrese el precio" min="6000" max="10000" required>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Imagen:</label>
    <input type="file" class="form-control bg-white text-dark border" id="txtimage" name="txtimage">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-primary">Actualizar espectáculo</button>
  </div>
</form>

<?php if ($this->session->flashdata('errors')): ?>
  <div class="alert alert-danger" role="alert">
    <?php foreach ($this->session->flashdata('errors') as $error): ?>
      <p><?php echo $error; ?></p>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
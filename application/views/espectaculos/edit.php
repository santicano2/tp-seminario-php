<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-white my-5"><?php echo $title; ?></h1>
<form action="<?php echo base_url('espectaculos/update/') . $espectaculo->id; ?>" method="POST" class="text-light bg-dark rounded-0 border border-2 border-primary p-4">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" value="<?php echo $espectaculo->name; ?>" placeholder="Ingrese el nombre">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Precio:</label>
    <input type="number" class="form-control bg-white text-dark border" id="price" name="price" value="<?php echo $espectaculo->price; ?>" placeholder="Ingrese el precio">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-primary">Actualizar producto</button>
  </div>
</form>
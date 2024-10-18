<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-white my-3"><?php echo $title; ?></h1>
<form action="<?php echo base_url('espectaculos/store'); ?>" method="POST" class="text-light bg-dark rounded-0 border border-2 border-primary p-5">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" placeholder="Ingrese el nombre">
  </div>
  <div class="mb-3">
    <label for="tickets" class="form-label">Tickets:</label>
    <input type="number" class="form-control bg-white text-dark border" id="tickets" name="tickets" placeholder="Número de tickets">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Precio:</label>
    <input type="number" class="form-control bg-white text-dark border" id="price" name="price" placeholder="Ingrese el precio">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-primary">Crear espectáculo</button>
  </div>
</form>
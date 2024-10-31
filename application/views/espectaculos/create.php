<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-white my-3"><?php echo $title; ?></h1>
<form action="<?php echo base_url('espectaculos/store'); ?>" method="POST" enctype="multipart/form-data" class="text-light bg-dark bg-opacity-75 rounded py-3 px-5 mb-3">
  <div class="mb-3">
    <label for="name" class="form-label fw-bold text-info">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" placeholder="Ingrese el nombre" required>
  </div>
  <div class="d-flex gap-3 mb-3">
    <div class="w-50">
      <label for="tickets" class="form-label fw-bold text-info">Tickets:</label>
      <input type="number" class="form-control bg-white text-dark border" id="tickets" name="tickets" placeholder="Número de tickets" min="10" max="80" required>
    </div>
    <div class="w-50">
      <label for="price" class="form-label fw-bold text-info">Precio:</label>
      <input type="number" class="form-control bg-white text-dark border" id="price" name="price" placeholder="Ingrese el precio" min="6000" max="10000" required>
    </div>
  </div>
  <div class="mb-3">
    <label for="duracion" class="form-label fw-bold text-info">Duración (minutos):</label>
    <input type="number" class="form-control" id="duracion" name="duracion" min="30" max="300" required>
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label fw-bold text-info">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label fw-bold text-info">Imagen:</label>
    <input type="file" class="form-control bg-white text-dark border" id="txtimage" name="txtimage">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-success">Agregar película</button>
  </div>

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
</form>
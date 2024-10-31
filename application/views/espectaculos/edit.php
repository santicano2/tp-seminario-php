<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-white my-2"><?php echo $title; ?></h1>
<form action="<?php echo base_url('espectaculos/update/') . $espectaculo->id; ?>" method="POST" enctype="multipart/form-data" class="text-light bg-dark rounded bg-opacity-75 p-4 mb-3">
  <div class="mb-3">
    <label for="name" class="form-label fw-bold text-info">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" value="<?php echo $espectaculo->name; ?>" placeholder="Ingrese el nombre" required>
  </div>
  <div class="d-flex gap-3 mb-3">
    <div class="w-50">
      <label for="tickets" class="form-label fw-bold text-info">Tickets:</label>
      <input type="number" class="form-control bg-white text-dark border" id="tickets" name="tickets" value="<?php echo $espectaculo->tickets; ?>" placeholder="Número de tickets" min="10" max="80" required>
    </div>
    <div class="w-50">
      <label for="price" class="form-label fw-bold text-info">Precio:</label>
      <input type="number" class="form-control bg-white text-dark border" id="price" name="price" value="<?php echo $espectaculo->price; ?>" placeholder="Ingrese el precio" min="6000" max="10000" required>
    </div>
  </div>
  <div class="mb-3">
    <label for="duracion" class="form-label fw-bold text-info">Duración (minutos):</label>
    <input type="number" class="form-control" id="duracion" name="duracion" value="<?php echo $espectaculo->duracion; ?>" min="30" max="300" required>
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label fw-bold text-info">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $espectaculo->descripcion; ?></textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label fw-bold text-info">Imagen:</label>
    <input type="file" class="form-control bg-white text-dark border" id="txtimage" name="txtimage" value="<?php echo $espectaculo->image; ?>">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-success">Editar película</button>
  </div>
</form>

<?php if ($this->session->flashdata('errors')): ?>
  <div class="alert alert-danger" role="alert">
    <?php foreach ($this->session->flashdata('errors') as $error): ?>
      <p><?php echo $error; ?></p>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
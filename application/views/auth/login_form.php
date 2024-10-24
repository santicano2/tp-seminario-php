<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>

<h3>Cine Monte Grande</h3>
<h1 class="text-white my-3"><?php echo $title; ?></h1>
<form action="<?php echo base_url('auth/login'); ?>" method="POST" class="text-light bg-dark rounded-0 border border-2 border-primary p-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control bg-white text-dark border" id="email" name="email" placeholder="Ingrese su email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña:</label>
    <input type="password" class="form-control bg-white text-dark border" id="password" name="password" placeholder="Ingrese una contraseña">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-success">Iniciar sesión</button>
  </div>
  <a href="<?php echo base_url('auth/register_form'); ?>" class="text-decoration-underline">¿No tiene una cuenta? Regístrese</a>
  <?php if (isset($errors)): ?>
    <?php foreach ($errors as $error): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</form>
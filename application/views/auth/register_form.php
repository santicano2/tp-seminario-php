<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>
<?php $success = $this->session->flashdata('success'); ?>

<h3>Cine Monte Grande</h3>
<h1 class="text-white my-3"><?php echo $title; ?></h1>
<form action="<?php echo base_url('auth/register'); ?>" method="POST" class="text-light bg-dark rounded-0 border border-2 border-primary p-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control bg-white text-dark border" id="email" name="email" placeholder="Ingrese su email">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control bg-white text-dark border" id="name" name="name" placeholder="Ingrese su nombre">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña:</label>
    <input type="password" class="form-control bg-white text-dark border" id="password" name="password" placeholder="Ingrese una contraseña">
  </div>
  <div class="mb-3">
    <label for="confirm-password" class="form-label">Confirmar Contraseña:</label>
    <input type="password" class="form-control bg-white text-dark border" id="confirm-password" name="confirm-password" placeholder="Confirmar contraseña">
  </div>
  <div class="d-flex justify-content-center p-2">
    <button type="submit" class="btn btn-success">Registrarse</button>
  </div>
  <a href="<?php echo base_url('auth/login_form'); ?>" class="text-decoration-underline">¿Ya tenes una cuenta? Iniciar sesión</a>
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
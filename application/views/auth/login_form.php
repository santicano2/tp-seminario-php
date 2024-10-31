<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $errors = $this->session->flashdata('errors'); ?>

<div style="background-image: url('<?php echo base_url('assets/img/cine2.jpg'); ?>'); background-size: cover; background-position: center; width: 100vw; height: 85vh;">
  <div class="container d-flex justify-content-center align-items-center" style="height: 100%; background-color: rgba(0, 0, 0, 0.6);">
    <div class="text-center text-white p-4 bg-dark rounded bg-opacity-75" style="width: 100%; max-width: 500px;">
      <h1>Cine Monte Grande</h3>
        <h2 class="text-white my-3"><?php echo $title; ?></h2>
        <form action="<?php echo base_url('auth/login'); ?>" method="POST">
          <div class="mb-3 text-start">
            <label for="email" class="form-label fw-bold">Email:</label>
            <input type="email" class="form-control bg-white text-dark border" id="email" name="email" placeholder="Ingrese su email">
          </div>
          <div class="mb-3 text-start">
            <label for="password" class="form-label fw-bold">Contraseña:</label>
            <input type="password" class="form-control bg-white text-dark border" id="password" name="password" placeholder="Ingrese una contraseña">
          </div>
          <div class="d-flex justify-content-center p-2 mb-2">
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
    </div>
  </div>
</div>
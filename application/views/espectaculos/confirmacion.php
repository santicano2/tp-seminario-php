<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="d-flex flex-column justify-content-center align-items-start">

	<h1 class="display-4 text-success ">Confirmación</h1>
	<h4 class="mt-3 mb-4">Gracias por tu compra</h4>
	<p><span class="fw-bold fs-5 text-info">Película:</span> <?php echo $compraData->pelicula; ?></p>
	<p><span class="fw-bold fs-5 text-info">Cantidad de tickets:</span> <?php echo $compraData->cantidad_tickets; ?></p>
	<p><span class="fw-bold fs-5 text-info">Fecha:</span> <?php echo $compraData->fecha_show; ?></p>
	<p><span class="fw-bold fs-5 text-info">Asiento:</span> <?php echo $compraData->asiento; ?></p>
	<p><span class="fw-bold fs-5 text-info">Método de pago:</span> <?php echo $compraData->pago; ?></p>
	<p><span class="fw-bold fs-5 text-info">Total</span> $<?php echo $compraData->precio_total; ?></p>

	<a href="<?php echo base_url('home'); ?>" class="btn btn-primary mt-3">Volver</a>
</div>
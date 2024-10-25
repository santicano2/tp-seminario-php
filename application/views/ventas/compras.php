<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-center text-white"><?php echo $title; ?></h1>
<p class="fs-5 text-success">Últimas 3 compras realizadas</p>
<div class="d-flex flex-column justify-content-center align-items-start">

	<?php if (!empty($ventas)): ?>
		<ul class="">
			<?php foreach ($ventas as $venta): ?>
				<li class="bg-dark p-3 border border-2 border-info mb-3" style="list-style-type: none">
					<p class="mb-0"><span class="fw-bold text-info">Fecha de compra:</span> <?php echo $venta->fecha; ?></p>
					<p class="mb-0"><span class="fw-bold text-info">Película:</span> <?php echo $venta->pelicula; ?></p>
					<p class="mb-0"><span class="fw-bold text-info">Día:</span> <?php echo $venta->fecha_show; ?></p>
					<p class="mb-0"><span class="fw-bold text-info">Tickets:</span> <?php echo $venta->cantidad_tickets; ?></p>
					<p class="mb-0"><span class="fw-bold text-info">Asiento:</span> <?php echo $venta->asiento; ?></p>
					<p class="mb-0"><span class="fw-bold text-info">Total:</span> <?php echo "$" . $venta->precio_total; ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<tr>
			<td colspan="5" class="text-center fs-5">No hay compras</td>
		</tr>
	<?php endif; ?>

</div>
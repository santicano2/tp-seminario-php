<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-center text-white my-4"><?php echo $title; ?></h1>
<div class="table-responsive px-5">
	<table class="table table-bordered table-dark table-striped table-hover">
		<thead>
			<tr class="table-warning fs-5 text-center">
				<th scope="col">ID</th>
				<th scope="col">Email del Comprador</th>
				<th scope="col">Película</th>
				<th scope="col">Fecha compra</th>
				<th scope="col">Cantidad de Tickets</th>
				<th scope="col">Precio Total</th>
				<th scope="col">Fecha show</th>
			</tr>
		</thead>
		<tbody>

			<?php if (!empty($ventas)): ?>
				<?php foreach ($ventas as $venta): ?>
					<tr class="text-center align-middle">
						<th scope="row"><?php echo $venta->id; ?></th>
						<td><?php echo $venta->nombre_comprador; ?></td>
						<td><?php echo $venta->pelicula; ?></td>
						<td><?php echo $venta->fecha; ?></td>
						<td><?php echo $venta->cantidad_tickets; ?></td>
						<td><?php echo "$" . $venta->precio_total; ?></td>
						<td><?php echo $venta->fecha_show; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="5" class="text-center fs-5">No hay ventas</td>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>
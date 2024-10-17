<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="text-center text-white my-5"><?php echo $title; ?></h1>
<div class="table-responsive px-5">
	<table class="table table-bordered table-dark table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $espectaculo->id; ?></td>
				<td><?php echo $espectaculo->name; ?></td>
				<td><?php echo '$' . $espectaculo->price; ?></td>
				<td>Editar | Borrar</td>
			</tr>
		</tbody>
	</table>
</div>
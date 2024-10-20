<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="text-center text-white my-4"><?php echo $title; ?></h1>
<div class="table-responsive px-5">
	<table class="table table-bordered table-dark table-striped table-hover">
		<thead>
			<tr class="table-warning fs-5">
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Email</th>
				<th scope="col">Rol</th>
			</tr>
		</thead>
		<tbody>

			<?php if (!empty($usuarios)): ?>
				<?php foreach ($usuarios as $usuario): ?>
					<tr>
						<th scope="row"><?php echo $usuario->id; ?></th>
						<td><?php echo $usuario->name; ?></td>
						<td><?php echo $usuario->email; ?></td>
						<td><?php echo $usuario->role; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4" class="text-center fs-5">No hay usuarios</td>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>
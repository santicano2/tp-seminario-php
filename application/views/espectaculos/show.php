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
				<td>
					<div class="d-flex">
						<a class="btn btn-warning me-2" href="<?php echo base_url("espectaculos/edit/") . $espectaculo->id; ?>">Editar</a>
						<form action="<?php echo base_url('espectaculos/delete/') . $espectaculo->id; ?>" method="post">
							<button class="btn btn-danger" type="submit">Borrar</button>
						</form>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<h1 class="text-center text-white my-5">Lista de espectáculos</h1>
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

			<?php if(!empty($espectaculos)): ?>
				<?php foreach ($espectaculos as $espectaculo): ?>
					<tr>
						<th scope="row"><?php echo $espectaculo->id; ?></th>
						<td><?php echo $espectaculo->name; ?></td>
						<td><?php echo '$' , $espectaculo->price; ?></td>
						<td>Ver | Editar | Borrar</td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4" class="text-center fs-5">No hay espectáculos</td>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>
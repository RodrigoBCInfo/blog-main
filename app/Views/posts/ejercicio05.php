<h3>5. Mostrar una tabla con los siguientes datos: cantidad total de usuarios
registrados, cantidad total de posts, cantidad total de comentarios, cantidad
total de categorias</h3>
<table border="1">
	<tr>
		<td>Usuarios</td>
		<td>Publicaciones</td>
		<td>Comentarios</td>
		<td>Categorías</td>
	</tr>
	<tr>
		<td>
			<?php foreach($totalUsers as $tu): ?>
				<?= $tu['totalUsuarios'] ?>
			<?php endforeach; ?>
		</td>

		<td>
			<?php foreach($totalPosts as $tp): ?>
				<?= $tp['totalPublicaciones'] ?>
			<?php endforeach; ?>
		</td>

		<td>
			<?php foreach($totalComments as $tc): ?>
				<?= $tc['totalComentarios'] ?>
			<?php endforeach; ?>
		</td>

		<td>
			<?php foreach($totalCategories as $tcat): ?>
				<?= $tcat['totalCategorias'] ?>
			<?php endforeach; ?>
		</td>
	</tr>
</table>
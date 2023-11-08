h3

<table border="1">
	<tr>
		<td>Escrito por</td>
		<td>Posts del 2022</td>
		<td>Posts del 2023</td>
	</tr>
	<tr>
		<td>Mujeres</td>

		<td>
			<?php foreach($postsEscritosPorMujeres2023 as $pepm23): ?>
				<?= $pepm23['pepm23'] ?>
			<?php endforeach; ?>
		</td>



	<?php if ($postsEscritosPorMujeres2023 > $postsEscritosPorMujeres2022) : ?>

		<td style="background-color: red; color: white">
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php elseif ($postsEscritosPorMujeres2023 < $postsEscritosPorMujeres2022) : ?>
		<td style="background-color: green; color: white">
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php else : ?>
		<td>
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php endif; ?>
	
				
		
		

		
	</tr>
	<tr>
		<td>Hombres</td>
		<td>
			<?php foreach($postsEscritosPorHombres as $peph): ?>
				<?= $peph['peph'] ?>
			<?php endforeach; ?>
		</td>
		<td>Por definir</td>
		
	</tr>
</table>


<hr>

<ul>
	<?php foreach ($postsEscritosPorMujeres2 as $x): ?>
		<li><?= '[' . $x['creado'] . '] ' . $x['titulo'] ?></li>	
	<?php endforeach; ?>
	
</ul>


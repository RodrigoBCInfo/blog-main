<h1>8. Mostrar una tabla con un resumen de las cantidades de posts escritos por
categoría y otro resumen de posts escritos por autor. Resaltar con un color
distinto el valor más alto y el más bajo en ambos resumenes.</h1>

<br>



<table border="1" width="100%">
    <thead>
        <tr>
            <th>RESUMEN</th>
            <th>TOTAL</th>


        </tr>
    </thead>

    <tbody>
    <?php foreach($resumen1 as $post) : ?>
        <tr style="background-color: brown; color: white">
            <td><?= $post['category']; ?></td>
            <td><?= $post['id']; ?></td>
          
          
       
        </tr>
    <?php endforeach; ?>
    </tbody>


</table>
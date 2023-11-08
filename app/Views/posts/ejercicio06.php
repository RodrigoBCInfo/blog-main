<h1>6. Mostrar una tabla con los siguientes datos: cantidad total de posts por
categoría, cantidad total de posts escritos por autor.
</h1>

<br>



<table border="1" width="100%">
    <thead>
        <tr>
            <th>CATEGORIA</th>
            <th>TOTAL DE POST</th>


        </tr>
    </thead>

    <tbody>
    
    <?php foreach($postsPorCategoria as $post) : ?>
        <tr>
            <td><?= $post['category']; ?></td>
            <td><?= $post['id']; ?></td>
          
          
       
        </tr>
    <?php endforeach; ?>
    </tbody>


</table>
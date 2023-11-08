<h3>9. En una tabla, mostrar el título del post, contenido del post y el nombre de la
categoria de todos los usuarios cuyo perfil sea administrador</h3>
<br>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>TITULO</th>
            <th>CONTENIDO</th>
            <th>CATEGORIA</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($postDeAdmin as $pda) : ?>
        <tr>
            <td><?= $pda['title']; ?></td>
            <td><?= $pda['content']; ?></td>
            <td><?= $pda['category']; ?></td>

    
           
        </tr>
    <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <th>POST ID</th>
            <th>CATEGORÍA</th>
        </tr>
    </tfoot>
</table>
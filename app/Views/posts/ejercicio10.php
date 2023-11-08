<h3>10. En una tabla, mostrar el último post escrito por cada mujer menor de 30
años y el primer post escrito por cada hombre mayor de 16 años.</h3>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>TITULO</th>
            <th>CREADO</th>
            <th>GENERO</th>
            <th>AÑOS</th>
            <th>ID</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($pem30 as $post) : ?>
        <tr>
            <td><?= $post['title']; ?></td>
            <td><?= $post['t']; ?></td>
            <td><?= $post['gender']; ?></td>
            <td><?= $post['años']; ?></td>
            <td><?= $post['autor'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>







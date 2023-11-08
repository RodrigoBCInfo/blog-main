<h3>2. Mostrar una tabla con el nombre del post y el nombre completo del autor de
la última categoría registrada en la base de datos.</h3>


<table border="1" width="100%">
    <thead>
        <tr>
            <th>AUTOR</th>
            <th>NOMBRE DE USUARIO</th>
            <th>TITULO</th>
            <th>CATEGORIA</th>


        </tr>
    </thead>

    <tbody>
    
    <?php foreach($tablaP as $p) : ?>
        <tr>
            <td><?= $p['autor']; ?></td>
            <td><?= $p['username']; ?></td>
            <td><?= $p['title']?></td>
            <td><?= $p['category']?></td>
          
        </tr>
    <?php endforeach; ?>
    </tbody>
<style>
    .boton{
        peadding: 10px;
        background-color: red;
        color: white:
    }
</style>
<a href=<?php echo base_url(); ?>posts/ejercicio2" target="_blank"> Descargar </a>
</table>
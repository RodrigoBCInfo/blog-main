<table border="1" width="100%">
    <thead>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>NOMBRE REAL</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </thead>

    <!-- +1 21TE0131, 21TE0008, 21TE0149, 21TE0133, 21TE0684 -->
    <tbody>
    <?php foreach($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario['username']; ?></td>
            <td><?= $usuario['password']; ?></td>
            <td><?= $usuario['name'] . ' ' . $usuario['lastname'] ?></td>
            <?php if ($usuario['status'] == 1): ?>
                <td>Activo</td>
            <?php else : ?>
                <td>Inactivo</td>
            <?php endif ?>
        </tr>
    <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>NOMBRE REAL</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </tfoot>
</table>
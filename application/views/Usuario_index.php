<h1>Listado de usuarios</h1>

<a href="nuevo">Nuevo Usuario</a><br>

<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach($Usuario as $data){ ?>            
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><a href="<?php echo 'eliminar/'.$data->usuario_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo 'ver_detalle/'.$data->usuario_id; ?>">Ver detalle</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
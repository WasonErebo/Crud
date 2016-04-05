<h1>Listado de ciudades</h1>

<a href="nueva">Nueva ciudad</a><br>

<table border="1">
    <thead>
    <th>Nombre</th>
    </thead>
    <tbody>
        <?php foreach($Ciudad as $data){ ?>            
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><a href="<?php echo 'eliminar/'.$data->ciudad_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo 'ver_detalle/'.$data->ciudad_id; ?>">Ver detalle</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


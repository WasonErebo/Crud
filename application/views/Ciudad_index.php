<h1>Listado de ciudades</h1>

<a href="Ciudad/nueva/">Nueva ciudad</a><br>

<table border="1">
    <head>
    <th>Id</th>
    <th>Nombre</th>
    <th>Acciones</th>
    </head>
    <tbody>
        <?php foreach($Ciudad as $data){ ?>            
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><a href="<?php echo (base_url() . 'index.php/Ciudad/eliminar/'.$data->ciudad_id); ?>">Eliminar</a></td>
            <td><a href="<?php echo (base_url() . 'index.php/Ciudad/editar/'.$data->ciudad_id); ?>">Editar</a></td>
            <td><a href="<?php echo (base_url() . 'index.php/Ciudad/ver_detalle/'.$data->ciudad_id); ?>">Ver detalle</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


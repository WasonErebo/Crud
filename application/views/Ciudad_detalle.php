<h1>Listado de ciudades</h1>

<a href="Ciudad/">Volver</a><br>

<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach($Ciudad as $data){ ?>            
        <tr>
            <td><?php echo $data->nombre; ?></td>
                        
        </tr>
        <?php } ?>
    </tbody>
</table>


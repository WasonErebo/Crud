
<a href="<?php echo (base_url() . 'index.php/login/log_out') ?>">Cerrar Sesion</a>
<br>
<form method="POST" action="../actualizar">
    <?php foreach($Ciudad as $ciu){?>
    Id:<input type="text" name="ciudad_id" value=<?php echo $ciu->ciudad_id; ?>><br>
    Nombre:<input type="text" name="nombre" value=<?php echo $ciu->nombre; ?>><br>
    <input type="submit" value="Editar Ciudad">
    <?php } ?>
</form>





        <div class="container">
            <br><br>
            <h1>Ingreso a sistema</h1>
            <br><br>
                <form method="post" action="<?php echo (base_url() . 'index.php/login/log_in') ?>">
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            

        </div><!-- /.container -->


       





<h1>Ingresar a sistema</h1>
<br>
<a href="<?php echo (base_url() . 'index.php/login/log_out') ?>">Cerrar Sesion</a>
<br>
<hr>
<form method="post" action="<?php echo (base_url() . 'index.php/login/log_in') ?>">
<table border="1">
    <tr>
        <td>Nombre de usuario:</td><td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Clave:</td><td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Iniciar Sesion"></td>
    </tr>
</table>
</form>

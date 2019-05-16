<?php
require __DIR__ . "/partials/inmobiliaria.part.php";

?>



<form action="registrarAdministrador.php" method="POST" enctype="multipart/form-data">
    <h1>Registro de administrador.</h1>

    <div class="form-group">
        <label for="formGroupExampleInput">Usuario</label>
        <input type="text" class="form-control" id="nombre" name="usuario" placeholder="Ejemplo: TzarDaniel">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Daniel">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ejemplo: Gerchev">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ejemplo:653366987">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="correo" placeholder="Ejemplo: divaylov@ieslavereda.es">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="contra" placeholder="Introduce contraseña">
    </div>

    <input type="submit" value="Enviar">
</form>











<!-- Footer -->
<footer class="py-1 bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p class="text-primary "> Daniel Ivaylov</p>
            </div>

            <div class="col-3">
                <a href="index.php"><button type="button" class="btn btn-primary">Inicio</button></a>
            </div>

            <div class="col-3">
                <p class="text-primary ">Inmobiliaria en: C/San Sebastian 5 Valencia CP 46019</p>
            </div>

            <div class="col-3">
                <marquee class="text-primary " behavior="scroll" direction="left"> Informacion al 961 616 161 </marquee>
            </div>

        </div>
    </div>
</footer>



<!-- Bootstrap JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-formhelpers-phone.js"></script>


</div>
</body>

</html>

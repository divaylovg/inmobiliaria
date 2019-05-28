<?php
ob_start();

require __DIR__ . "/partials/inmobiliaria.part.php";

?>


<div class="container m-2">
        <div class="row text-left">

        <form action="loguearEmpleado.php" method="POST" enctype="multipart/form-data">
            <h1>Seccion de empleados. Ingresa tus datos para vender y alquilar inmuebles.</h1>

            <div class="form-group">
                <label for="formGroupExampleInput">Usuario</label>
                <input type="text" class="form-control" id="nombre" name="usuario" placeholder="Ejemplo: TzarDaniel">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="contra" placeholder="Introduce contraseña">
            </div>

            <input type="submit" value="Enviar"></input>
        </form>

    </div>
</div>


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


</div>
</body>

</html>

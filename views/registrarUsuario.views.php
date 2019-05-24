<?php
require __DIR__ . "/partials/inmobiliaria.part.php";
ob_start();

?>
<div class="container m-5">
    <div class="row text-left">


<form action="registrarUsuario.php" method="POST" enctype="multipart/form-data">
    <h1>Registrate para anunciar tus inmuebles totalmente gratis!</h1>

    <div class="form-group">
        <label  class="text-left" for="formGroupExampleInput">Usuario</label>
        <input type="text" class="form-control" id="nombre" name="usuario" placeholder="Ejemplo: TzarDaniel" required>
    </div>

    <div class="form-group">
        <label class="text-left" for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="nombre"  onblur="comprobarLetrasNombre();" name="nombre" placeholder="Ejemplo: Daniel" required>
    </div>
    <div class="form-group">
        <label class="text-left" for="formGroupExampleInput2">Apellido</label>
        <input type="text" class="form-control" id="apellido" onblur="comprobarLetrasApellido();" name="apellido" placeholder="Ejemplo: Gerchev" required>
    </div>
    <div class="form-group">
        <label class="text-left" for="formGroupExampleInput2">Telefono</label>
        <input type="text" class="form-control" id="telefono" onblur="comprobarTelefono();" name="telefono" placeholder="Ejemplo:653366987" required>
    </div>

    <div class="form-group">
        <label  class="text-left" for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="correo" placeholder="Ejemplo: divaylov@ieslavereda.es" required>
        <small class="form-text text-muted">Nunca vamos a dar su informacion a terceros.</small>
    </div>
    <div class="form-group">
        <label class="text-left" for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="contra" placeholder="Introduce contraseña" required>
    </div>

    <input type="submit" value="Enviar">
</form>

    </div>
</div>



<SCRIPT LANGUAGE="Javascript">
    let arCampos=document.getElementsByTagName('input');

    let regNumero= /^\d+$/;
    let regLetras= /^\D+$/;

    function comprobarLetrasNombre(){
        if (regLetras.test(arCampos[1].value)) {
            arCampos[1].style.background="green";
        }else{
            arCampos[1].style.background="red";
        }
    }

    function comprobarLetrasApellido(){
        if (regLetras.test(arCampos[2].value)) {
            arCampos[2].style.background="green";
        }else{
            arCampos[2].style.background="red";
        }
    }
    function comprobarTelefono(){
        if (regNumero.test(arCampos[3].value)) {
            arCampos[3].style.background="green";
        }else{
            arCampos[3].style.background="red";
        }
    }

</SCRIPT>








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

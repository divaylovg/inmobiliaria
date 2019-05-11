<?php
require __DIR__ . "/partials/inmobiliaria.part.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";
    // me pasa el id vacio y no se porque
    $id=$_POST['id'];


    ?><script>
        alert ("<?php $id ?>");
    </script>
    <?php

    $statement=$PDO->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $inmueble = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$inmueble){
        //no hay usuario que se llame asi
        ?><script>
            alert("No se ha encontrado inmueble con el id indicado.");
        </script>
        <?php

    }else{
        echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['imagen1'];?></br>
        <?php echo $inmueble['provincia'];?></br>
        <?php echo $inmueble['metros'];?><?php


    }
}
?>



<form action="loguearUsuario.php" method="POST" enctype="multipart/form-data">
    <h1>Si te has registrado ahora te puedes loguear para gestionar tus inmuebles</h1>

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

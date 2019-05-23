<?php
    require __DIR__ . "/partials/inmobiliaria.part.php";

    require_once 'Connection.php';
    $PDO=Connection::make();
    //OBTENEMOS LOS PISOS PARA ALQUILAR Y PARA VENDER
    if ($_SERVER['REQUEST_METHOD']==='GET') {

        $stmt=$PDO->prepare("SELECT * FROM inmueble where alquiler>0");
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
        $stmt->execute();
        $alquiler=$stmt->fetchAll();

        $stmt=$PDO->prepare("SELECT * FROM inmueble where venta>0");
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
        $stmt->execute();
        $venta=$stmt->fetchAll();

        $stmt=$PDO->prepare("SELECT * FROM inmueble");
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
        $stmt->execute();
        $todo=$stmt->fetchAll();

        //print_r($alquiler);

    }


?>




<form action="masInformacion.php" method="POST" enctype="multipart/form-data">
    <h1>Podeis obtener informacion de los inmuebles, alquilar, vender, y borrar pisos.</h1>

    <div class="form-row">


        <div class="col">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Si deseas obtener mas datos para informar a los interesados sobre el inmueble busca por  <b>numero de referencia</b> </label>
            <select class="custom-select my-1 mr-sm-2" name="id" id="id">

                <?php foreach($todo as $t): ?>

                    <option value=<?php echo $t['id'];?>><?php echo $t['id'];?></option>

                <?php endforeach; ?>

            </select>
        </div>

    </div>
    <div>    <input type="submit" value="Enviar"></input>
    </div>
    </br>
</form>



<form action="funcionesEmpleado.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">


        <div class="col">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Selecciona piso para alquilar por su <b>numero de referencia</b></label>
            <select class="custom-select my-1 mr-sm-2" name="id" id="id">

                <?php foreach($alquiler as $a): ?>

                <option value=<?php echo $a['id'];?>><?php echo $a['id'];?></option>

                <?php endforeach; ?>

            </select>
        </div>

    </div>
    <div>    <input type="submit" value="Enviar"></input>
    </div>
</br>
</form>


<form action="funcionesEmpleadoVender.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">


        <div class="col">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Selecciona piso para vender de la base de datos por su <b>numero de referencia</b></label>
            <select class="custom-select my-1 mr-sm-2" name="id" id="id">

                <?php foreach($venta as $v): ?>

                    <option value=<?php echo $v['id'];?>><?php echo $v['id'];?></option>

                <?php endforeach; ?>

            </select>
        </div>

    </div>
    <div>    <input type="submit" value="Enviar"></input>
    </div>
    </br>
</form>



<form action="funcionesEmpleadoVender.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">


        <div class="col">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Selecciona piso para borrar de la base de datos por su <b>numero de referencia</b></label>
            <select class="custom-select my-1 mr-sm-2" name="id" id="id">

                <?php foreach($todo as $t): ?>

                    <option value=<?php echo $t['id'];?>><?php echo $t['id'];?></option>

                <?php endforeach; ?>

            </select>
        </div>

    </div>
    <div>    <input type="submit" value="Enviar"></input>
    </div>
    </br>
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

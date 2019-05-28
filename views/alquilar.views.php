<?php
ob_start();

require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='GET') {
    //obtenemos todos los inmuebles agrupando por ciudad para que no nos salga mas de una vez las repetidas
    $stmt=$PDO->prepare("SELECT * FROM inmueble group by ciudad");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $ciudades=$stmt->fetchAll();

    //obtenemos todos los inmuebles por tipo y agrupando para que no se repita
    $stmt=$PDO->prepare("SELECT * FROM inmueble group by tipo");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $tipos=$stmt->fetchAll();
}


?>
<div class="container">
    <form action="imprimirAlquiler.php" method="POST" enctype="multipart/form-data">


<div class="row text-center">
     <div class="col-lg-3 col-md-6 mb-4 zoom">
            <div class="card h-100">
                <img class="card-img-top" src="img/euro3.jpg">
                <div class="card-body">
                    <h4 class="card-title">Dinero </h4>
                    <p class="card-text">
                        Cuanto es tu presupuesto máximo?
                    </p>
                        <input type="text" name="dinero" id="dinero" value="" required>
                </div>
            </div>
        </div>

    <div class="col-lg-3 col-md-6 mb-4 zoom">
        <div class="card h-100">
            <img class="card-img-top " src="img/ciudad.jpg">
            <div class="card-body">
                <h4 class="card-title">Tipo de vivienda </h4>
                <p class="card-text">
                    Elige tipo de vivienda que te interesa.
                </p>
                    <select name="tipo">
                        <?php foreach($tipos as $tipo): ?>
                            <option value=<?php echo $tipo['tipo']?> name="tipo"><?php echo $tipo['tipo'] ?></option>;
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-4 zoom">
        <div class="card h-100">
            <img class="card-img-top " src="img/ciudad3.jpg">
            <div class="card-body">
                <h4 class="card-title">Ciudad </h4>
                <p class="card-text">
                    Elige la ciudad en la que deseas vivir.
                </p>
                    <select name="ciudad">
                        <?php foreach($ciudades as $ciudad): ?>
                            <option value=<?php echo $ciudad['ciudad']?> name="ciudad"><?php echo $ciudad['ciudad'] ?></option>;
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 zoom">
        <div class="card h-100">
            <img class="card-img-top " src="img/metros4.jpg">
            <div class="card-body">
                <h4 class="card-title">Habitaciones </h4>
                <p class="card-text">
                    Número mínimo de habitaciones:

                </p>
                    <select class="custom-select my-1 mr-sm-2" name="habitaciones" id="habitaciones">
                        <option value="0">Sin habitaciones<option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
            </div>


        </div>
    </div>
    <div class="card-footer col">
        <input class="btn btn-primary" type="submit" value="Buscar"></input>
    </div>
    </form>
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
                <marquee class="text-primary " behavior="scroll" direction="left"> Información al 961 616 161 </marquee>
            </div>

        </div>
    </div>
</footer>


</div>
<!-- Bootstrap JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</div>
</body>

</html>

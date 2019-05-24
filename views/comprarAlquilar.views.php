<?php
ob_start();

require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='GET') {

    $stmt=$PDO->prepare("SELECT * FROM inmueble group by ciudad");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $ciudades=$stmt->fetchAll();
}


?>

<div class="container m-5"">

    <div class="row justify-content-around ">
        <div class="col-4 ">
            <a title="Vender" href="alquilar.php">
                <img src="img/alquilar.jpg" class="helicoptero" style="width:100%" href="alquilar.php">
        </div>
        <div class="col-4 ">
            <a title="Vender" href="comprar.php">
            <img src="img/comprar.jpg" class="helicoptero" style="width:100%" href="comprar.php">
        </div>
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


</div>
<!-- Bootstrap JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</div>
</body>

</html>

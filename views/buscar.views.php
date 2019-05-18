<?php
require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='GET') {

    $stmt=$PDO->prepare("SELECT * FROM inmueble group by ciudad");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $ciudades=$stmt->fetchAll();
    print_r($ciudades);
}


?>


<div class="row text-center">
     <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="img/euro.jpg">
                <div class="card-body">
                    <h4 class="card-title">Dinero </h4>
                    <p class="card-text">
                        Cuanto es tu presupuesto maximo?
                    </p>
                    <form action="buscar.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="dinero" value="">

                </div>
                    <div class="card-footer">
                        <input class="btn btn-primary" type="submit" value="Buscar"></input>
                    </div>
                </form>

            </div>
        </div>



    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="img/ciudad3.jpg">
            <div class="card-body">
                <h4 class="card-title">Dinero </h4>
                <p class="card-text">
                    Cuanto es tu presupuesto maximo?
                </p>
                <form action="buscar.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="dinero" value="">

            </div>
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Buscar"></input>
            </div>
            </form>

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



<!-- Bootstrap JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</div>
</body>

</html>

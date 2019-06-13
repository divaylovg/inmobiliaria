<?php
ob_start();

require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

$objetos=[];

if ($_SERVER['REQUEST_METHOD']==='POST') {
//SELECT * FROM inmueble where alquiler< 5000 and tipo = 'chalet' and ciudad = 'Valencia' and habitaciones< 4
    $dinero=$_POST['dinero'];
    $tipo=$_POST['tipo'];
    $ciudad=$_POST['ciudad'];
    $habitaciones=$_POST['habitaciones'];


    $statement=$PDO->prepare("SELECT * FROM inmueble where alquiler<:dinero and alquiler>0  and tipo = :tipo and ciudad = :ciudad and habitaciones>= :habitaciones and alquilado=0");
    $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $statement->bindParam(':dinero', $dinero);
    $statement->bindParam(':tipo', $tipo);
    $statement->bindParam(':ciudad', $ciudad);
    $statement->bindParam(':habitaciones', $habitaciones);
    $statement->execute();
    $objetos=$statement->fetchAll();
   // print_r($objetos);

    if (!$objetos) {
        //no hay objetos  redirigimos atras
        ?>  <script>
            alert("No existe piso con las caracteristicas deseadas.");
        </script>
        <?php

    }


}


?>



<div class="container m-2">

    <div class="row text-center ">
        <?php foreach($objetos as $objeto): ?>
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card h-100">
                    <img class="card-img-top circulito zoomGrande" src=<?php echo $objeto['foto1'];?>>
                    <div class="card-body">
                        <h4 class="card-title">Ciudad <?php echo $objeto['ciudad'];?> </h4>
                        <p class="card-text">
                            Informacion sobre inmueble:
                        </p>

                        <p class="text-left card-text">
                            Tipo de inmueble: <?php echo $objeto['tipo'];?></br>
                            Alquiler: <?php echo $objeto['alquiler'];?></br>
                            Metros cuadrados: <?php echo $objeto['metros'];?></br>
                            Habitaciones: <?php echo $objeto['habitaciones'];?></br>
                            Altura: <?php echo $objeto['piso'];?></br>
                            Numero de referencia:
                        </p>
                        <form action="masInformacion.php" method="POST" enctype="multipart/form-data">
                            <input type="text" readonly name="id" value=<?php echo $objeto['id'];?> />

                    </div>
                    <div class="card-footer">
                        <!--class="btn btn-primary submit"-->
                        <input class="btn btn-primary" type="submit" value="Mas informacion"></input>
                    </div>
                         </form>

                </div>
            </div>

        <?php endforeach; ?>


    </div>

</div>

<div class="container m-2">

    <div class="row justify-content-around contraste">
        <a title="Volver atras" href="alquilar.php">
            <img src="img/volver.png" class="rounded mx-auto d-block"   href="alquilar.php">
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

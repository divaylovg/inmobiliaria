<?php
ob_start();

require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

$objetos=[];

if ($_SERVER['REQUEST_METHOD']==='GET') {

    $stmt=$PDO->prepare("SELECT * FROM inmueble");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $objetos=$stmt->fetchAll();
}


?>



<div class="container">

    <!--  Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Queremos encontrar tu hogar</h1>
        <p>Que nos diferencia? En nuestra empresa no existe la palabra exclusividad!</p>
        <p>La mayoria de inmobiliarias les obliga a tener su inmueble durante meses por contrato pero nosotros creemos en nuestros agentes y como grandes profesionales que son les garantizamos la venta de su inmueble. Si quiere usted mismo puede dar de baja su piso! Sin ningun compromismo.</p>
        <p>Les ofrecemos asesoramiento totalmente gratuito. Tasacion de su propiedad. Compra venta y alquiler de toda clase de inmuebles.</p>
        <a href="contacto.php" class="btn btn-primary btn-lg">Quiero saber mas!</a>
    </header>

    <h1 class="text-center ">A continuacion nuestra mejor seleccion de inmuebles</h1>
    <div class="row text-center">
        <?php foreach($objetos as $objeto): ?>
            <div class="col-lg-3 col-md-6">

                <div class="card h-100">
                    <img class="card-img-top zoom" src=<?php echo $objeto['foto1'];?>>
                    <div class="card-body">
                        <h4 class="card-title">Ciudad <?php echo $objeto['ciudad'];?> </h4>
                        <p class="card-text">
                            Informacion sobre inmueble:
                        </p>

                        <p class="text-left card-text">
                            Tipo de inmueble: <?php echo $objeto['tipo'];?></br>
                            Habitaciones: <?php echo $objeto['habitaciones'];?></br>
                            Metros cuadrados: <?php echo $objeto['metros'];?></br>
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

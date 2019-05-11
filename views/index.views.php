<?php
require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

$objetos=[];

if ($_SERVER['REQUEST_METHOD']==='GET') {

    $stmt=$PDO->prepare("SELECT * FROM inmueble");
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $stmt->execute();
    $objetos=$stmt->fetchAll();

    //obtenemos el total de objetos que tenemos en nuestra base de datos en la tabla inmueble. Vamos a imprimir los primeros 6 solo.
    /*  echo $todos=sizeof($objetos);
      for ($i=0;$i<8;$i++){
          echo $objetos[$i]['id'];
          echo $objetos[$i]['tipo'];
          echo $objetos[$i]['alquiler'];
          ?></br><?php
      }*/
}


?>



<div class="container">

    <!--  Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Queremos encontrar tu hogar</h1>
        <p>Les ofrecemos asesoramiento totalmente gratuito. Tasacion de su propiedad. Compra venta y alquiler de toda clase de inmuebles.</p>
        <p>A continuacion nuestra mejor seleccion de inmuebles</p>
        <a href="#" class="btn btn-primary btn-lg">Quiero saber mas!</a>
    </header>

    <div class="row text-center">

        <?php foreach($objetos as $objeto): ?>
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card h-100">
                    <img class="card-img-top" src=<?php echo $objeto['foto1'];?>>
                    <div class="card-body">
                        <h4 class="card-title">Ciudad <?php echo $objeto['ciudad'];?> </h4>
                        <p class="card-text">
                            Informacion sobre inmueble:
                        </p>

                        <p class="text-left card-text">
                            Tipo de inmueble: <?php echo $objeto['tipo'];?></br>
                            Habitaciones: <?php echo $objeto['habitaciones'];?></br>
                            Metros cuadrados: <?php echo $objeto['metros'];?></br>
                            Precio de venta: <?php echo $objeto['venta'];?></br>
                            Precio de alquiler: <?php echo $objeto['alquiler'];?>/mes.</br>
                            Identificador del inmueble:
                        </p>
                        <form>
                            <input type="text" readonly="readonly" value=<?php echo $objeto['id'];?> />
                            <input type="submit" value="Mas informacion"></input>

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

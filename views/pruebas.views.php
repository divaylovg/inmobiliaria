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
    echo $todos=sizeof($objetos);
    for ($i=0;$i<8;$i++){
        echo $objetos[$i]['id'];
        echo $objetos[$i]['tipo'];
        echo $objetos[$i]['alquiler'];
        ?></br><?php
    }
}


?>





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

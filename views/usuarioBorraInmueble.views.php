<?php
ob_start();

require __DIR__."/partials/inmobiliaria.part.php";
require_once 'Connection.php';
$PDO=Connection::make();

$objetos=[];

$idPropietario=$_SESSION['id'];

if ($_SERVER['REQUEST_METHOD']==='GET') {
    $statement=$PDO->prepare("SELECT * FROM inmueble where idPropietario=:idProp");
    $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $statement->bindParam(':idProp', $idPropietario);
    $statement->execute();
    $susPisos=$statement->fetchAll();

    $statement=$PDO->prepare("SELECT * FROM propietario where id=:idProp");
    $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"propietario");
    $statement->bindParam(':idProp', $idPropietario);
    $statement->execute();
    $datosPropietario=$statement->fetchAll();
//sus pisos seran los pisos del usuario que posee y puede borrar
    //print_r($datosPropietario);
}

?>



<div class="container m-2">


    <h1 class="text-center ">Estos son todos tus inmuebles, <?php echo $datosPropietario[0]["nombre"]; ?>. Si quieres borrar alguno solo tienes que seleccionarlo. Si deseas volver atras puedes hacerlo al final de la pagina.</h1>
    <div class="row text-center">
        <?php foreach($susPisos as $piso): ?>
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card h-100">
                    <img class="card-img-top" src=<?php echo $piso['foto1'];?>>
                    <div class="card-body">
                        <h4 class="card-title">Ciudad <?php echo $piso['ciudad'];?> </h4>
                        <p class="card-text">
                            Informacion sobre inmueble:
                        </p>

                        <p class="text-left card-text">
                            Id propietario: <?php echo $piso['idPropietario'];?></br>
                            Tipo de inmueble: <?php echo $piso['tipo'];?></br>
                            Habitaciones: <?php echo $piso['habitaciones'];?></br>
                            Metros cuadrados: <?php echo $piso['metros'];?></br>
                            Altura: <?php echo $piso['piso'];?></br>
                            Numero de referencia:
                        </p>
                        <form action="usuarioBorraInmueble.php" method="POST" enctype="multipart/form-data">
                            <input type="text" readonly name="id" value=<?php echo $piso['id'];?> />

                    </div>
                    <div class="card-footer">
                        <!--class="btn btn-primary submit"-->
                        <input class="btn btn-primary" type="submit" value="Borrar inmueble"></input>
                    </div>
                         </form>

                </div>
            </div>

        <?php endforeach; ?>


    </div>


</div>
<div class="container m-2">

    <div class="row justify-content-around">
            <a title="Borra tus inmuebles" href="funcionesUsuario.php">
                <img src="img/volver.png" class="rounded mx-auto d-block"   href="usuarioBorraInmueble.php">
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

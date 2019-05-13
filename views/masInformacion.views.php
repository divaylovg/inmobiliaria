<?php
require __DIR__ . "/partials/inmobiliaria.part.php";

require_once 'Connection.php';
$PDO=Connection::make();



if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";
    // me pasa el id vacio y no se porque
    $id=$_POST['id'];

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


        $arImg=[];
        for ($i=1;$i<6;$i++){
            $nombre="foto".$i;
            if (null!=$inmueble[$nombre]){
                array_push($arImg,$inmueble[$nombre]);
            }
        }
        //print_r($arImg);

/*
        echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['foto1'];?></br>
        <?php echo $inmueble['provincia'];?></br>
        <?php echo $inmueble['metros'];?><?php
*/
    }
}

?>


<!-- Imprimir imagenes -->

<div id="myCarousel" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel">
    <div class="carousel-inner" role="listbox">


        <div class="carousel-item active">
            <img class="d-block w-100" src=<?php echo $arImg[0];?> >
            <div class="carousel-caption">
            </div>
        </div>

        <?php foreach($arImg as $img): ?>
        <div class="carousel-item">
            <img class="d-block w-100" src=<?php echo $img;?> >
            <div class="carousel-caption">
            </div>
        </div>
        <?php endforeach; ?>

    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguente</span>
    </a>
</div>


<!-- Datos a imprimir -->


<table class="table table-striped">
    <tbody>
    <tr>
        <th scope="row">ID:</th>
        <td><?php echo $inmueble['id'];?></td>
        <th>Tipo:</th>
        <td><?php echo $inmueble['tipo'];?></td>
    </tr>
    <tr>
        <th scope="row">Alquiler:</th>
        <td><?php echo $inmueble['alquiler'];?></td>
        <th>Venta:</th>
        <td><?php echo $inmueble['venta'];?></td>
    </tr>
    <tr>
        <th scope="row">Habitaciones:</th>
        <td><?php echo $inmueble['habitaciones'];?></td>
        <th>Metros:</th>
        <td><?php echo $inmueble['metros'];?></td>
    </tr>
    <tr>
        <th scope="row">Ciudad:</th>
        <td><?php echo $inmueble['ciudad'];?></td>
        <th>Provincia:</th>
        <td><?php echo $inmueble['provincia'];?></td>
    </tr>
    <tr>
        <th scope="row">Calle:</th>
        <td><?php echo $inmueble['calle'];?></td>
        <th>Numero:</th>
        <td><?php echo $inmueble['numero'];?></td>
    </tr>
    <tr>
        <th scope="row">CP:</th>
        <td><?php echo $inmueble['cp'];?></td>
        <th>Ciudad:</th>
        <td><?php echo $inmueble['ciudad'];?></td>
    </tr>
    <tr>
        <th scope="row">Altura:</th>
        <td><?php echo $inmueble['piso'];?></td>
        <th>Ascensor:</th>
        <td><?php if('nu'!=$inmueble['ascensor']){
                echo $inmueble['ascensor'];
            }else{
            echo "No";
            }?></td>
    </tr>
    <tr>
        <th scope="row">Comentario:</th>
        <td><?php echo $inmueble['descripcion'];?></td>
    </tr>
    </tbody>
</table>











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

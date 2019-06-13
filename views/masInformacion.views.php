<?php
ob_start();

require __DIR__ . "/partials/inmobiliaria.part.php";

require_once 'Connection.php';
$PDO=Connection::make();



if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";
    $id=$_POST['id'];

    $statement=$PDO->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $inmueble = $statement->fetch(PDO::FETCH_ASSOC);



    if (!$inmueble){
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
    }
}

?>


<!-- Imprimir imagenes -->

<div id="myCarousel" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel">
    <div class="carousel-inner" role="listbox">


        <div class="carousel-item active zoomMuyGrande">
            <img class="d-block w-100" src=<?php echo $arImg[0];?> >
            <div class="carousel-caption">
            </div>
        </div>

        <?php foreach($arImg as $img): ?>
        <div class="carousel-item zoomMuyGrande">
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
    <tr class="fila">
        <th scope="row">Referencia:</th>
        <td><?php echo $inmueble['id'];?></td>
        <th>Tipo:</th>
        <td><?php echo $inmueble['tipo'];?></td>
    </tr>
    <tr class="fila">
        <th scope="row">Alquiler:</th>
        <td><?php if ($inmueble['alquilado']=="1"){
            echo "Alquilado por ".$inmueble['alquiler'];
            }else{
            echo $inmueble['alquiler'];}
            ?></td>

        <th>Venta:</th>
        <td><?php if ($inmueble['vendido']=="1"){
                echo "Vendido por ".$inmueble['venta'];
            }else{
                echo $inmueble['venta'];}
            ?></td>
    </tr>
    <tr class="fila">
        <th scope="row">Habitaciones:</th>
        <td><?php echo $inmueble['habitaciones'];?></td>
        <th>Metros:</th>
        <td><?php echo $inmueble['metros'];?></td>
    </tr>
    <tr class="fila">
        <th scope="row">Ciudad:</th>
        <td><?php echo $inmueble['ciudad'];?></td>
        <th>Provincia:</th>
        <td><?php echo $inmueble['provincia'];?></td>
    </tr>
    <tr class="fila">
        <th scope="row">Calle:</th>
        <td><?php echo $inmueble['calle'];?></td>
        <th>Numero:</th>
        <td><?php echo $inmueble['numero'];?></td>
    </tr>

    <tr class="fila">
        <th scope="row">Altura:</th>
        <td><?php echo $inmueble['piso'];?></td>
        <th>Ascensor:</th>
        <td><?php if('nu'!=$inmueble['ascensor']){
                echo $inmueble['ascensor'];
            }else{
            echo "No";
            }?></td>
    </tr>

    <tr class="fila">
        <th scope="row">CP:</th>
        <td><?php echo $inmueble['cp'];?></td>
        <th scope="row"></th>
        <td></td>

    </tr>

    </tbody>
</table>

<table class="table table-striped fila">
    <tbody>
<th scope="row">Comentario:</th>
<td><?php echo $inmueble['descripcion'];?></td>

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


</div>
</body>

</html>

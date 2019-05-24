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

    <div class="row align-items-center my-5 contraste zoom">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="img/contacto1.jpg" alt="">
        </div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Inmobiliaria tu casa</h1>
            <p>El <b>valor añadido</b> de nuestra empresa consiste en que no existe la palabra permanencia. Usted no se atara a través de un contrato de exclusividad con nosotros como hacen todas las demás inmobiliarias. Confiamos tanto en la <b>profesionalidad de nuestros agentes </b>que estamos seguros de que su inmueble se venderá/alquilara rápido y si no es así usted mismo puede dar de baja el inmueble que ha registrado en nuestra pagina web. </p>
        </div>
    </div>


    <table class="table table-striped">
        <h1>Donde nos encontramos.</h1>
        <tbody>
        <tr class="fila">
            <th scope="row">Ciudad:</th>
            <td>Valencia</td>
            <th>CP:</th>
            <td>46019 </td>
        </tr>

        <tr class="fila">
            <th scope="row">Calle:</th>
            <td>C/San Sebastian 5  </td>
            <th>Telefono:</th>
            <td>961 616 161</td>
        </tr>
        <tr class="fila">
            <th scope="row">Email:</th>
            <td>tucasa@ieslavereda.es  </td>
            <th>Responsable</th>
            <td>Daniel Ivaylov Gerchev</td>
        </tr>
        </tbody>
    </table>


    <div class="card text-white bg-primary mb-5 text-center">
        <div class="card-body">
            <p class="text-white ">Le ofrecemos asesoramiento, visitas guiadas por nuestros agentes a clientes y tasación totalmente gratuitos. No le cobraremos ni un céntimo hasta consigamos vender/alquilar su inmueble. No tendrá que lidiar con usuarios molestos ni personas curiosas. </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-5">
            <div class="card h-100 arcoiris">
                <div class="card-body">
                    <h2 class="card-title">Registrar usuario</h2>
                    <p class="card-text">Si se registra como usuario podrá gestionar todos sus inmuebles, para alquilar o vender online, de manera muy sencilla. Quiere dar de alta un inmueble En tan solo 30 segundos ya estará subido online y la gente puede recibir toda la información sobre el.</p>
                </div>
                <div class="card-footer">
                    <a href="registrarUsuario.php" class="btn btn-primary btn-sm">Registrarse</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5 ">
            <div class="card h-100 arcoiris">
                <div class="card-body">
                    <h2 class="card-title">Buscar inmuebles</h2>
                    <p class="card-text">Puede buscar inmuebles para comprar y alquilar por toda España. Tan fácil como filtrar por el dinero máximo que desea gastarse, la ciudad en la que desea vivir, el numero de habitaciones y el tipo de inmueble.</p>
                </div>
                <div class="card-footer">
                    <a href="comprarAlquilar.php" class="btn btn-primary btn-sm">Buscar</a>
                </div>
            </div>
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

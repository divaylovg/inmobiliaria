<?php
require __DIR__ . "/partials/inmobiliaria.part.php";
ob_start();

require_once 'Connection.php';
$PDO=Connection::make();
$idPropietario=$_SESSION['id'];

$statement=$PDO->prepare("SELECT * FROM propietario where id=:idProp");
$statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"propietario");
$statement->bindParam(':idProp', $idPropietario);
$statement->execute();
$datosPropietario=$statement->fetchAll();
?>


<form action="funcionesUsuario.php" method="POST" enctype="multipart/form-data">
    <h1>Aqui puedes añadir y borrar tus pisos, <?php echo $datosPropietario[0]["nombre"]; ?></h1>
    <p>Si alguien esta interesado en sus inmuebles nosotros nos pondremos en contacto con usted con los datos que nos ha facilitado, estos no seran publicos y siempre que alguien le llame sera un profesional de nuestra inmobiliaria:</p>

    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Telefono:</th>
                <td><?php echo $datosPropietario[0]["telefono"];?></td>
                <th>Correo:</th>
                <td><?php echo $datosPropietario[0]["correo"];?></td>
            </tr>
        </tbody>
    </table>


    <h1>Registrar nuevo inmueble</h1>


    <div class="form-row">


        <div class="col-lg-3 col-md-6 mb-4">
            <label for="validationTooltip01">Precio alquiler</label>
            <input type="text" name="alquiler" onblur="comprobarNumerosAlquiler();" placeholder="Entero" >
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <label for="validationTooltip01">Precio venta</label>
            <input type="text"  name="venta" onblur="comprobarNumerosVenta();" placeholder="Entero" >
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Metros cuadrados</label>
        <input type="text" class="form-control" onblur="comprobarNumerosMetros();" name="metros" placeholder="Metros"  required>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Calle</label>
        <input type="text" class="form-control" name="calle" onblur="comprobarLetrasCalle();"  placeholder="Nombre de la calle" required>
    </div>


    <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Numero</label>
        <input type="text" class="form-control"  name="numero" onblur="comprobarNumeroCalle();" placeholder="Entero"  required>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Puerta</label>
        <input type="text" class="form-control"  name="puerta" onblur="comprobarNumeroPuerta();" placeholder="Entero"  required>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Ciudad</label>
        <input type="text" class="form-control"  name="ciudad" onblur="comprobarLetrasCiudad();" placeholder="First name"  required>
    </div>


    <div class="col-lg-3 col-md-6 mb-4">
        <label for="validationTooltip01">Telefono</label>
        <input type="text" class="form-control"  name="telefonoPropietario" onblur="comprobarNumerosTelefono();" placeholder="Entero"  required>
    </div>



        <div class="col-md-4 mb-3">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo inmueble</label>
            <select class="custom-select my-1 mr-sm-2" name="tipo" id="habitaciones">
                <option selected value="chalet">Chalet</option>
                <option value="finca">Finca</option>
                <option value="piso">Piso</option>
                <option value="terreno">Terreno</option>
                <option value="garaje">Garaje</option>
                <option value="trastero">Trastero</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Ascensor</label>
            <select class="custom-select my-1 mr-sm-2" name="ascensor" id="habitaciones">
                <option selected value=null>No</option>
                <option value="si">Si</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Habitaciones</label>
        <select class="custom-select my-1 mr-sm-2" name="habitaciones" id="habitaciones">
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        </div>

        <div class="col-md-4 mb-3">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Piso</label>
            <select class="custom-select my-1 mr-sm-2" name="piso" id="habitaciones">
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provincia</label>
            <select class="custom-select my-1 mr-sm-2" name="provincia" id="provincia">
                <option value='alava'>Álava</option>
                <option value='albacete'>Albacete</option>
                <option value='alicante'>Alicante/Alacant</option>
                <option value='almeria'>Almería</option>
                <option value='asturias'>Asturias</option>
                <option value='avila'>Ávila</option>
                <option value='badajoz'>Badajoz</option>
                <option value='barcelona'>Barcelona</option>
                <option value='burgos'>Burgos</option>
                <option value='caceres'>Cáceres</option>
                <option value='cadiz'>Cádiz</option>
                <option value='cantabria'>Cantabria</option>
                <option value='castellon'>Castellón/Castelló</option>
                <option value='ceuta'>Ceuta</option>
                <option value='ciudadreal'>Ciudad Real</option>
                <option value='cordoba'>Córdoba</option>
                <option value='cuenca'>Cuenca</option>
                <option value='girona'>Girona</option>
                <option value='laspalmas'>Las Palmas</option>
                <option value='granada'>Granada</option>
                <option value='guadalajara'>Guadalajara</option>
                <option value='guipuzcoa'>Guipúzcoa</option>
                <option value='huelva'>Huelva</option>
                <option value='huesca'>Huesca</option>
                <option value='illesbalears'>Illes Balears</option>
                <option value='jaen'>Jaén</option>
                <option value='acoruña'>A Coruña</option>
                <option value='larioja'>La Rioja</option>
                <option value='leon'>León</option>
                <option value='lleida'>Lleida</option>
                <option value='lugo'>Lugo</option>
                <option value='madrid'>Madrid</option>
                <option value='malaga'>Málaga</option>
                <option value='melilla'>Melilla</option>
                <option value='murcia'>Murcia</option>
                <option value='navarra'>Navarra</option>
                <option value='ourense'>Ourense</option>
                <option value='palencia'>Palencia</option>
                <option value='pontevedra'>Pontevedra</option>
                <option value='salamanca'>Salamanca</option>
                <option value='segovia'>Segovia</option>
                <option value='sevilla'>Sevilla</option>
                <option value='soria'>Soria</option>
                <option value='tarragona'>Tarragona</option>
                <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                <option value='teruel'>Teruel</option>
                <option value='toledo'>Toledo</option>
                <option value='valencia'>Valencia/Valéncia</option>
                <option value='valladolid'>Valladolid</option>
                <option value='vizcaya'>Vizcaya</option>
                <option value='zamora'>Zamora</option>
                <option value='zaragoza'>Zaragoza</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationTooltip01">Codigo postal</label>
            <input type="text" class="form-control" onblur="comprobarNumerosCP();"  name="cp" placeholder="CP"  required>
        </div>


        <div class="col-md-4 mb-3">
            <label for="num">Foto 1 </label>
            <input type="file" name="foto1" value="">
        </div>

        <div class="col-md-4 mb-3">
            <label for="num">Foto 2 </label>
            <input type="file" name="foto2" value="">
        </div>

        <div class="col-md-4 mb-3">
            <label for="num">Foto 3 </label>
            <input type="file" name="foto3" value="">
        </div>

        <div class="col-md-4 mb-3">
            <label for="num">Foto 4 </label>
            <input type="file" name="foto4" value="">
        </div>

        <div class="col-md-4 mb-3">
            <label for="num">Foto 5 </label>
            <input type="file" name="foto5" value="">
        </div>


        <div class="form-group col-12">
            <label for="coment">Descripcion del inmueble</label>
            <textarea class="form-control" id="descripcion" name="descripcion"  placeholder="Describenos de la mejor manera las caracteristicas del inmueble. Recuerda que de eso depende su venta/alquiler." rows="3"></textarea>
        </div>

    </div>
    <div>    <input type="submit" value="Enviar"></input>
    </div>
</br>
</form>


<div class="container">

    <div class="row justify-content-around">
        <div class="col">
            <a title="Borra tus inmuebles" href="usuarioBorraInmueble.php">
                <img src="img/borrar.jpg" style="width:100%" href="usuarioBorraInmueble.php">
        </div>
    </div>
</div>



<!-- Expresiones regulares javascript -->

<SCRIPT LANGUAGE="Javascript">
    let arCampos=document.getElementsByTagName('input');

    let regNumero= /^\d+$/;
    let regLetras= /^\D+$/;

    function comprobarNumerosAlquiler(){
        if (regNumero.test(arCampos[0].value)) {
            arCampos[0].style.background="green";
        }else{
            arCampos[0].style.background="red";
        }
    }

    function comprobarNumerosVenta(){
        if (regNumero.test(arCampos[1].value)) {
            arCampos[1].style.background="green";
        }else{
            arCampos[1].style.background="red";
        }
    }

    function comprobarNumerosMetros(){
        if (regNumero.test(arCampos[2].value)) {
            arCampos[2].style.background="green";
        }else{
            arCampos[2].style.background="red";
        }
    }

    function comprobarLetrasCalle(){
        if (regLetras.test(arCampos[3].value)) {
            arCampos[3].style.background="green";
        }else{
            arCampos[3].style.background="red";
        }
    }

    function comprobarNumeroCalle(){
        if (regNumero.test(arCampos[4].value)) {
            arCampos[4].style.background="green";
        }else{
            arCampos[4].style.background="red";
        }
    }


    function comprobarNumeroPuerta(){
        if (regNumero.test(arCampos[5].value)) {
            arCampos[5].style.background="green";
        }else{
            arCampos[5].style.background="red";
        }
    }

    function comprobarLetrasCiudad(){
        if (regLetras.test(arCampos[6].value)) {
            arCampos[6].style.background="green";
        }else{
            arCampos[6].style.background="red";
        }
    }


    function comprobarNumerosTelefono(){
        if (regNumero.test(arCampos[7].value)) {
            arCampos[7].style.background="green";
        }else{
            arCampos[7].style.background="red";
        }
    }

    function comprobarNumerosCP(){
        if (regNumero.test(arCampos[8].value)) {
            arCampos[8].style.background="green";
        }else{
            arCampos[8].style.background="red";
        }
    }
</SCRIPT>


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

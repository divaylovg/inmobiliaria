<?php

session_start();

require "views/index.views.php";

require_once 'Connection.php';
$PDO=Connection::make();
/*
if ($_SERVER['REQUEST_METHOD']==='POST') {
    ?>  <script>
        alert("La contraseña no coincide, vuelva a intentarlo");
    </script>
    <?
    // no me imprime la id por lo tanto no entra aqui ni guarda el id del piso en session ni me redirige a la pagina de mas informacion. Ahi es donde imprimire el piso en detalle.
    echo $_POST['id'];

    $_SESSION["idPiso"]=$_POST['id'];
    include $_SESSION["id"];
    echo  $_SESSION["id"];
    header('Location:masInformacion.php');

}
*/


if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";
    // me pasa el id vacio y no se porque
    $id=$_POST['id'];


        ?><script>
            alert ("<?php $id ?>");
        </script>
        <?php

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
            echo $inmueble['id'];?>
</br>
<?php echo $inmueble['id'];?>
</br>
<?php echo $inmueble['imagen1'];?></br>
<?php echo $inmueble['provincia'];?></br>
<?php echo $inmueble['metros'];?><?php


        }
}

?>
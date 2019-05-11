<?php

session_start();

require "views/index.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {
    // no me imprime la id por lo tanto no entra aqui ni guarda el id del piso en session ni me redirige a la pagina de mas informacion. Ahi es donde imprimire el piso en detalle.
    echo $_POST['id'];

    $_SESSION["idPiso"]=$_POST['id'];
    include $_SESSION["id"];
    header('Location:masInformacion.php');

}

?>


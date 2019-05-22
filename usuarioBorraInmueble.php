<?php

session_start();
ob_start();

require "views/usuarioBorraInmueble.views.php";


require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $id=$_POST['id'];


    $sql="DELETE from inmueble where inmueble.id=:id";
    $statement=$PDO->prepare($sql);
    $statement->bindParam(':id', $id);

    $statement->execute();

    ?>  <script>
        alert("Se ha completado la peticion.");
    </script>
    <?
    header('Location: usuarioBorraInmueble.php');


}


?>
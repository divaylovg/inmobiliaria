<?php
session_start();
ob_start();

require "views/funcionesEmpleado.views.php";
require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $id=$_POST['id'];


    $sql="UPDATE inmueble SET alquiler=0 where id=:id";
    $statement=$PDO->prepare($sql);
    $statement->bindParam(':id', $id);

    $statement->execute();

    ?>  <script>
        alert("El piso se ha alquilado");
    </script>
    <?php


}



?>
<?php
session_start();
ob_start();

require "views/funcionesAdministrador.views.php";
require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql="INSERT INTO  ms_tipo_inmueble (tipo) VALUES (:tipo)";
    $tipo=$_POST['tipo'];

    if ($tipo!=""){
        $statement=$PDO->prepare($sql);
        $statement->bindParam(':tipo', $tipo);
        $statement->execute();
        ?>  <script>
            alert("El tipo de inmueble se ha añadido");
        </script>
        <?php

    }
}

?>
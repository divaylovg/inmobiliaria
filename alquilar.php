<?php

session_start();
ob_start();

require "views/alquilar.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

//SELECT * FROM inmueble where alquiler< 5000 and tipo = 'chalet' and ciudad = 'Valencia' and habitaciones< 4
    $dinero=$_POST['dinero'];
    $tipo=$_POST['tipo'];
    $coidad=$_POST['ciudad'];
    $habitaciones=$_POST['habitaciones'];

    $statement=$PDO->prepare("SELECT * FROM inmueble where alquiler< :dinero and tipo = :tipo and ciudad = ciudad and habitaciones< :habitaciones");
    $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"inmueble");
    $statement->bindParam(':dinero', $dinero);
    $statement->bindParam(':tipo', $tipo);
    $statement->bindParam(':ciudad', $ciudad);
    $statement->bindParam(':habitaciones', $habitaciones);
    $statement->execute();
    $pisos=$statement->fetchAll();

    print_r($pisos);

    if (!$persona){
        //no hay usuario que se llame asi
        ?><script>
            alert("No se ha encontrado usuario con los datos indicados");
        </script>
        <?

    }else if (password_verify($contra, $persona["contra"])){


        $_SESSION["idEmpleado"]=$persona['id'];


        //las contraseñas coinciden y redirigimos a funciones de usuario
        header('Location:funcionesEmpleado.php');
    }else if(!password_verify($contra, $persona['contra'])){
        ?>  <script>
            alert("La contraseña no coincide, vuelva a intentarlo");
        </script>
        <?
    }


}

?>
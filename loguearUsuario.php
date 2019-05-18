<?php

session_start();
ob_start();
require "views/loguearUsuario.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT contra,id from propietario where usuario=:usuario";

    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];

    $statement=$PDO->prepare($sql);
    $statement->bindParam(':usuario', $usuario);
    $statement->execute();
    $persona = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$persona){
        //no hay usuario que se llame asi
        ?><script>
            alert("No se ha encontrado usuario con los datos indicados");
        </script>
        <?php

    }else if (password_verify($contra, $persona["contra"])){

        $_SESSION["id"]=$persona['id'];

        //las contraseñas coinciden y redirigimos a funciones de usuario
        header('Location:funcionesUsuario.php');
        exit();
    }else if(!password_verify($contra, $persona['contra'])){
        ?>  <script>
            alert("La contraseña no coincide, vuelva a intentarlo");
        </script>
        <?php
    }


}

?>


<?php

session_start();

require "views/loguearAdministrador.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT contra,id from administrador where usuario=:usuario";

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
        <?

    }else if (password_verify($contra, $persona["contra"])){

        $_SESSION["idAdministrador"]=$persona['id'];

        header('Location:/inmobiliaria/funcionesAdministrador.php');
    }else if(!password_verify($contra, $persona['contra'])){
        ?>  <script>
            alert("La contraseña no coincide, vuelva a intentarlo");
        </script>
        <?
    }


}

?>


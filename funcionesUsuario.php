<?php


require "views/funcionesUsuario.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT contra from propietario where usuario=:usuario";

    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];

    $statement=$PDO->prepare($sql);
    $statement->bindParam(':usuario', $usuario);
    $statement->execute();
    $persona = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$persona){
        //no hay usuario que se llame asi
        echo "No se ha encontrado usuario con el nombre de usuario introducido";

    }else if (password_verify($contra, $persona["contra"])){
        $_SESSION["usuario"]=$usuario;
        //las contraseñas coinciden
        header('Location:funcionesUsuario.php');
    }else if(!password_verify($contra, $usuario["contra"])){
        echo"La contraseña no coincide";
    }


}

?>


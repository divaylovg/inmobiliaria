<?php

session_start();

require "views/masInformacion.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";

    $id=$_POST['id'];

    $statement=$PDO->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $inmueble = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$inmueble){
        //no hay usuario que se llame asi
        ?><script>
            alert("No se ha encontrado inmueble con el id indicado.");
        </script>
        <?

    }else{
        echo $inmueble['id'];
        echo $inmueble['habitaciones'];
        echo $inmueble['metros'];
        echo $inmueble['id'];
        echo $inmueble['id'];

    }


}

?>


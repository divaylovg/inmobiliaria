<?php

session_start();

require "views/masInformacion.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql = "SELECT * from inmueble where id=:id";
    // me pasa el id vacio y no se porque
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
        <?php

    }else{


        $arImg=[];
        for ($i=1;$i<6;$i++){
            $nombre="foto".$i;
            if (null!=$inmueble[$nombre]){
                array_push($arImg,$inmueble[$nombre]);
            }
        }
        print_r($arImg);


        echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['id'];?>
        </br>
        <?php echo $inmueble['foto1'];?></br>
        <?php echo $inmueble['provincia'];?></br>
        <?php echo $inmueble['metros'];?><?php


    }
}

?>


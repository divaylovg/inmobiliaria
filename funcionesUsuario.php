<?php


require "views/funcionesUsuario.views.php";

require_once 'Connection.php';
$PDO=Connection::make();


if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql="INSERT INTO inmueble (tipo , alquiler, venta, habitaciones, metros,provincia, ciudad, calle, cp, numero, puerta, piso, idPropietario,telefonoPropietario,descripcion,ascensor) VALUES (:usuario,:nombre,:apellido, :telefono, :correo, :contra)";
    $usuario=$_POST['usuario'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $nombre=$_POST['nombre'];
    $contra=$_POST['contra'];

    if ($usuario!=""){
        if ($nombre!=""){
            if ($apellido!=""){
                if ($telefono!=""){
                    if ($correo!=""){
                        if ($contra!=""){

                            //encriptamos la contraseña
                            $contra=hash2( $contra);

                            $statement=$PDO->prepare($sql);
                            $statement->bindParam(':usuario', $usuario);
                            $statement->bindParam(':nombre', $nombre);
                            $statement->bindParam(':apellido', $apellido);
                            $statement->bindParam(':telefono', $telefono);
                            $statement->bindParam(':correo', $correo);
                            $statement->bindParam(':contra', $contra);

                            $statement->execute();
                            echo "El usuario ".$usuario." ha sido creado correctamente.";
                        }else{
                            echo "Falta contraseña";
                        }
                    }else{
                        echo "Falta correo";
                    }
                }else{
                    echo "Falta telefono";
                }
            }else{
                echo "Falta apellido.";
            }
        }else{
            echo "No ha introducido nombre";
        }
    }else{
        echo "Falta usuario";
    }
}


?>


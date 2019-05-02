<?php
session_start();

require "views/funcionesUsuario.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

$idPropietario=$_SESSION['id'];
echo $idPropietario;

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql="INSERT INTO inmueble (tipo , alquiler, venta, habitaciones, metros,provincia, ciudad, calle, cp, numero, puerta, piso, idPropietario,telefonoPropietario,descripcion,ascensor,foto1,foto2,foto3,foto4,foto5) VALUES (:tipo , :alquiler, :venta, :habitaciones, :metros, :provincia, :ciudad, :calle, :cp, :numero, :puerta, :piso, :idPropietario, :telefonoPropietario, :descripcion, :ascensor, :foto1,:foto2, :foto3, :foto4,:foto5)";
    $tipo=$_POST['tipo'];
    $habitaciones=$_POST['habitaciones'];
    $metros=$_POST['metros'];
    $provincia=$_POST['provincia'];
    $ciudad=$_POST['ciudad'];
    $calle=$_POST['calle'];
    $cp=$_POST['cp'];
    $numero=$_POST['numero'];
    $puerta=$_POST['puerta'];
    $piso=$_POST['piso'];
    $telefonoPropietario=$_POST['telefonoPropietario'];
    $descripcion=$_POST['descripcion'];
    $ascensor=$_POST['ascensor'];


    if(!isset($alquiler)){
        $alquiler=$_POST['alquiler'];
    }
    if(!isset($venta)){
        $venta=$_POST['venta'];
    }
    //EL ID ESTA RESERVADO DE ANTES GUARDADO EN SESION COMO EL NOMBRE DEL USUARIO.


    //alquiler y venta pueden no haberse introducido por lo tanto no hacemos comprobacion hasta despues y comprobamos que tenga por lo menos la primera foto que es obligatoria.
    if ($tipo!=""){
                if ($habitaciones!=""){
                    if ($metros!=""){
                        if ($provincia!=""){
                            if ($ciudad!=""){
                                if ($calle!=""){
                                    if ($cp!=""){
                                        if ($numero!=""){
                                            if ($puerta!=""){
                                                        if ($piso!=""){
                                                            if ($descripcion!=""){
                                                                if ($ascensor!=""){
                                                                        if ($telefonoPropietario!=""){

                                                                            $ruta="imagenes/";
                                                                            $name1=$_FILES['foto1']['name'];
                                                                            $name2=$_FILES['foto2']['name'];
                                                                            $name3=$_FILES['foto3']['name'];
                                                                            $name4=$_FILES['foto4']['name'];
                                                                            $name5=$_FILES['foto5']['name'];
                                                                            $foto1="imagenes/".$name1;
                                                                            $foto2="imagenes/".$name2;
                                                                            $foto3="imagenes/".$name3;
                                                                            $foto4="imagenes/".$name4;
                                                                            $foto5="imagenes/".$name5;
                                                                            $idUnico = time();

                                                                            If (is_file($foto1) === true) {
                                                                                $name1 = $idUnico . '_f1_' . $name1;
                                                                                $foto1 = $ruta . $name1;

                                                                            }if (move_uploaded_file($_FILES['foto1']['tmp_name'], $foto1)) {

                                                                                $statement = $PDO->prepare($sql);
                                                                                $statement->bindParam(':tipo', $tipo);
                                                                                $statement->bindParam(':habitaciones', $habitaciones);
                                                                                $statement->bindParam(':metros', $metros);
                                                                                $statement->bindParam(':provincia', $provincia);
                                                                                $statement->bindParam(':ciudad', $ciudad);
                                                                                $statement->bindParam(':calle', $calle);
                                                                                $statement->bindParam(':telefonoPropietario', $telefonoPropietario);
                                                                                $statement->bindParam(':cp', $cp);
                                                                                $statement->bindParam(':numero', $numero);
                                                                                $statement->bindParam(':puerta', $puerta);
                                                                                $statement->bindParam(':piso', $piso);
                                                                                $statement->bindParam(':descripcion', $descripcion);
                                                                                $statement->bindParam(':ascensor', $ascensor);
                                                                                $statement->bindParam(':foto1', $foto1);

                                                                                $statement->bindParam(':idPropietario', $idPropietario);

                                                                                if (isset($venta)) {
                                                                                    $statement->bindParam(':venta', $venta);

                                                                                }
                                                                                if (isset($alquiler)) {
                                                                                    $statement->bindParam(':alquiler', $alquiler);
                                                                                }



                                                                                If (is_file($foto2) === true) {
                                                                                    $name2 = $idUnico . '_f2_' . $name2;
                                                                                    $foto2 = $ruta . $name2;

                                                                                }if (move_uploaded_file($_FILES['foto2']['tmp_name'], $foto2)) {
                                                                                    $statement->bindParam(':foto2', $foto2);
                                                                                }



                                                                                If (is_file($foto3) === true) {
                                                                                    $name3 = $idUnico . '_f3_' . $name3;
                                                                                    $foto3 = $ruta . $name3;

                                                                                }if (move_uploaded_file($_FILES['foto3']['tmp_name'], $foto3)) {
                                                                                    $statement->bindParam(':foto3', $foto3);
                                                                                }


                                                                                If (is_file($foto4) === true) {
                                                                                    $name4 = $idUnico . '_f4_' . $name4;
                                                                                    $foto4 = $ruta . $name4;

                                                                                }if (move_uploaded_file($_FILES['foto4']['tmp_name'], $foto4)) {
                                                                                    $statement->bindParam(':foto4', $foto4);
                                                                                }

                                                                                If (is_file($foto5) === true) {
                                                                                    $name5 = $idUnico . '_f5_' . $name5;
                                                                                    $foto5 = $ruta . $name5;

                                                                                }if (move_uploaded_file($_FILES['foto5']['tmp_name'], $foto5)) {
                                                                                    $statement->bindParam(':foto5', $foto5);
                                                                                }


                                                                                $statement->execute();
                                                                            }else{
                                                                                ?>
                                                                                <script>
                                                                                    alert("Falta foto ");
                                                                                </script>
                                                                                <?
                                                                            }

                                                                        }else{
                                                                            ?>
                                                                            <script>
                                                                                alert("Falta telefono ");
                                                                            </script>
                                                                            <?
                                                                        }

                                                                }else{
                                                                    ?>
                                                                    <script>
                                                                        alert("Falta ascensor");
                                                                    </script>
                                                                    <?
                                                                }

                                                            }else{
                                                                ?>
                                                                <script>
                                                                    alert("Falta descripcion");
                                                                </script>
                                                                <?
                                                            }

                                                        }else{
                                                            ?>
                                                            <script>
                                                                alert("Falta piso");
                                                            </script>
                                                            <?
                                                        }


                                            }else{
                                                ?>
                                                <script>
                                                    alert("Falta puerta");
                                                </script>
                                                <?
                                            }

                                        }else{
                                            ?>
                                            <script>
                                                alert("Falta numero ");
                                            </script>
                                            <?
                                        }

                                    }else{
                                        ?>
                                        <script>
                                            alert("Falta cp");
                                        </script>
                                        <?
                                    }

                                }else{
                                    ?>
                                    <script>
                                        alert("Falta calle");
                                    </script>
                                    <?
                                }

                            }else{
                                ?>
                                <script>
                                    alert("Falta ciudad");
                                </script>
                                <?
                            }

                        }else{
                            ?>
                            <script>
                                alert("Falta provincia");
                            </script>
                            <?
                        }
                    }else{
                        ?>
                        <script>
                            alert("Falta metros");
                        </script>
                        <?
                    }

                }else{
                    ?>
                        <script>
                        alert("Falta numero habitaciones");
                        </script>
                    <?
                }

    }else{
        ?>
            <script>
            alert("Falta tipo");
            </script>
        <?
    }
}




?>


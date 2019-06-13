<?php
session_start();

require "views/funcionesUsuario.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

$idPropietario=$_SESSION['id'];

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $sql="INSERT INTO inmueble (tipo , alquiler, venta, habitaciones, metros,provincia, ciudad, calle, cp, numero, puerta, piso, idPropietario,telefonoPropietario,descripcion,ascensor,foto1) VALUES (:tipo , :alquiler, :venta, :habitaciones, :metros, :provincia, :ciudad, :calle, :cp, :numero, :puerta, :piso, :idPropietario, :telefonoPropietario, :descripcion, :ascensor, :foto1)";
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

                                                        $name1=$_FILES['foto1']['name'];

                                                        $foto1="imagenes/".$name1;

                                                        $idUnico = time();

                                                        if (is_file($foto1) === true) {
                                                            $name1 = $idUnico . '_f1_' . $name1;
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

                                                            // ver la insercion echo $statement->queryString;
                                                            $statement->execute();



                                                            $sqlid = "SELECT id FROM inmueble ORDER BY id DESC LIMIT 1";
                                                            $statement=$PDO->prepare($sqlid);
                                                            $statement->execute();
                                                            $ultimoId = $statement->fetch(PDO::FETCH_ASSOC);

                                                            if (isset($_FILES["fotos"])) {

                                                                $namex =$_FILES['fotos']['name'];
                                                                for($i=0;$i<sizeof($namex);$i++) {
                                                                    $fotox="imagenes/".$namex[$i];
                                                                    echo $fotox;

                                                                    if (move_uploaded_file($_FILES['fotos']['tmp_name'][$i], $fotox)) {
                                                                        $sqlfoto="INSERT INTO fotos (foto, id_inmueble) VALUES (:foto,:id_inmueble)";
                                                                        $statement=$PDO->prepare($sqlfoto);
                                                                        $statement->bindParam(':id_inmueble', $ultimoId['id']);
                                                                        $statement->bindParam(':foto', $fotox);
                                                                        $statement->execute();

                                                                    }

                                                                }

                                                            }
                                                        }
                                                        ?>
                                                        <script>
                                                            alert("El piso se ha registrado");
                                                        </script>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <script>
                                                            alert("Falta foto ");
                                                        </script>
                                                        <?php
                                                    }

                                                }else{
                                                    ?>
                                                    <script>
                                                        alert("Falta telefono ");
                                                    </script>
                                                    <?php
                                                }

                                            }else{
                                                ?>
                                                <script>
                                                    alert("Falta ascensor");
                                                </script>
                                                <?php
                                            }

                                        }else{
                                            ?>
                                            <script>
                                                alert("Falta descripcion");
                                            </script>
                                            <?php
                                        }

                                    }else{
                                        ?>
                                        <script>
                                            alert("Falta piso");
                                        </script>
                                        <?php
                                    }


                                }else{
                                    ?>
                                    <script>
                                        alert("Falta puerta");
                                    </script>
                                    <?php
                                }

                            }else{
                                ?>
                                <script>
                                    alert("Falta numero ");
                                </script>
                                <?php
                            }

                        }else{
                            ?>
                            <script>
                                alert("Falta cp");
                            </script>
                            <?php
                        }

                    }else{
                        ?>
                        <script>
                            alert("Falta calle");
                        </script>
                        <?php
                    }

                }else{
                    ?>
                    <script>
                        alert("Falta ciudad");
                    </script>
                    <?php
                }

            }else{
                ?>
                <script>
                    alert("Falta provincia");
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Falta metros");
            </script>
            <?php
        }

    }else{
        ?>
        <script>
            alert("Falta numero habitaciones");
        </script>
        <?php
    }


}




?>


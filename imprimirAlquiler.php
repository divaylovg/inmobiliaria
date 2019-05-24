<?php

session_start();
ob_start();

require "views/imprimirAlquiler.views.php";

require_once 'Connection.php';
$PDO=Connection::make();

?>
<?php

session_start();
ob_start();

require "views/alquilar.views.php";

require_once 'Connection.php';
$PDO=Connection::make();




?>
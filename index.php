<?php
require_once("src/controllers/Controller.php");
if(!isset($_SESSION)){session_start();}

if($_SESSION['autenticado'] =='SI'){
    $Dashboard = new Controller();
    $Dashboard->dashboard();
     
}else{
    header('Location:login.php');
}
?>
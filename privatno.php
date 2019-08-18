<?php include_once "konfiguracija.php";

if(!isset($_SESSION["autoriziran"])){
    header("location: index.php");
    exit;
}
?>
<a href="baza.php">Baza</a>
<a href="odjava.php">Odjava</a>
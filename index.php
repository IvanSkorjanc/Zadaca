<?php include_once "konfiguracija.php" ?>

<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Početna stranica</title>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css">

<a href="kontakt.php">Kontakt</a>


<div id = "index">
<div class="grid-x grid-padding-x">
<div class="large-8 medium-6 cell">
<form action="autoriziraj.php" method="post">
<label>E-mail
    <input type="email" name="email"  />
</label>

<label>Lozinka
    <input type="password" name="lozinka" />
    
</label>
    
</div>

<br>

<input type="submit" value="Autoriziraj">

</form>

</html>

<?php
if(isset($_GET["g"])){
    echo $poruke[$_GET["g"]];
}
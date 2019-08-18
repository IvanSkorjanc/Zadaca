<?php include_once "konfiguracija.php" ?>

<!DOCTYPE HTML>
<html>

<head>

<a href="index.php">Početna stranica</a>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontakt</title>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css">
</head>

<div id = "kontakt">
<div class="grid-x grid-padding-x">
<div class="large-8 medium-6 cell">
    
    <form action="kontakt.php" method="post">    
    <label>Ime i prezime
        <input type="text" name="Ime"  />
    </label>    
                
    <label>Email
        <input type="email" name="email" />
    </label>
                
    <label>Poruka
        <textarea name="message"></textarea>
    </label>


</div>

<input id="submit" name="submit" type="submit" value="Pošalji" >
 
</form>

</div>

<br>

<div id = "map">
                <script>
                    function initMap()
                    {
                        var location = {lat: 45.545200, lng: 18.727740};
                        var map = new google.maps.Map(document.getElementById("map"),{
                            zoom: 4,
                            center: location
                        });
                        var marker = new google.maps.Marker({
                            position: location,
                            map: map
                        });
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkFuck2s8mvoe7vXKm0oplgizrMAqhEfc&callback=initMap"
                 type="text/javascript"></script>
            </div>

            <div id = "content_area_info">
            <p class="large">
                            Naziv tvrke: Compfigurator d.o.o.<br>
                            Sjedište: Stonska 1b, 31000 Osijek<br>
                            tel: (888) 447-5594<br>
                            email: compfigurator@gmail.com<br>
            </p>
            </div>
<?php
//var_dump($_SESSION);
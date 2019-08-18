<?php
// za provjeru greški
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$veza = new PDO("mysql:dbname=furije_edunovapp19;host=localhost",
"furije_edunova","Furije029028",[PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"]);
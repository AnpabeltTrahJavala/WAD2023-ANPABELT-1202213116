<?php

session_start();

$_SESSION["nama_user"] = "EAD Laboratory";
$_SESSION["login"] = true;
$_SESSION["test"] = "Aman Bre";


var_dump($_SESSION);






$login = $_SESSION["login"];
echo $login;






unset($_SESSION["test"]);



session_destroy();
exit();
var_dump($_SESSION);

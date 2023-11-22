<?php
setcookie("COOKIEPERTAMA", "Belajar Cookie Maniezzz");

if (isset($_COOKIE["COOKIEPERTAMA"])) {
    $cookiePertama = $_COOKIE["COOKIEPERTAMA"];
    echo $cookiePertama;
} else {
    echo "Cookie not set yet or not available in the current request.";
}

<?php

$db = mysqli_connect("localhost", "root", "", "wad");

// Check connection
if (!$db) {
    die("Connection Failed: " . mysqli_connect_error());
}

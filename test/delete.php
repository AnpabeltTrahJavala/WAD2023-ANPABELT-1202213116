<?php
include("config.php");

$id = $_GET['id'];
mysqli_query($connect, "DELETE from pengguna WHERE id=$id");
header("Location:read.php");

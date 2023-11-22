<?php

function rememberMe($cookie)
{


    global $db;


    $id = $cookie['id'];


    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($db, $query);


    if (mysqli_num_rows($result) == 1) {

        $data = mysqli_fetch_assoc($result);

        $_SESSION["login"] = true;
        $_SESSION["username"] = $data['username'];
    }
}

<?php


require 'config.php';


function login($input)
{

    global $db;


    $username = $input['username'];
    $password = $input['username'];


    $query = "SELECT * FROM users WHERE username = $username";
    $result = mysqli_query($db, $query);


    if (mysqli_num_rows($result) == 1) {


        $data = mysqli_fetch_assoc($result);


        if (password_verify($password, $data['password'])) {


            $_SESSION["login"] = true;
            $_SESSION["username"] = $data['username'];
        } else {

            $_SESSION['message'] = 'Password Salah';
            $_SESSION['color'] = 'danger';
        }
    } else {
        $_SESSION['message'] = 'Username Tidak Ditemukan';
        $_SESSION['color'] = 'danger';
    }
}


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

    if (isset($_COOKIE['id'])) {
        rememberMe($_COOKIE);
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        login($_POST);
    }
}

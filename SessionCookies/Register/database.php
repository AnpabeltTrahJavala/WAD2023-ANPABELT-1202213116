<?php

// Koneksi ke database
include 'config.php';

// Memulai session
session_start();

// Menyimpan nilai dari form registrasi
$username = $_POST['username'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Mengecek apakah email sudah terdaftar
$query1 = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($db, $query1);

// Jika email belum terdaftar maka proses registrasi berlanjut
if (mysqli_num_rows($result) == 0) {

    // Insert data registrasi ke database
    $query2 = "INSERT INTO users (name, username, phone, password) VALUES ('$name', '$username', '$phone', '$password')";
    $insert = mysqli_query($db, $query2);

    if ($insert) {
        $_SESSION['message'] = 'Pendaftaran sukses, silahkan login';
        $_SESSION['color'] = 'success'; // 'success' is a valid Bootstrap class
        header('Location: authentication.php');
    } else {
        $_SESSION['message'] = 'Pendaftaran gagal';
    }
} else {
    $_SESSION['message'] = 'Username sudah terdaftar';
    header('Location: register.php');
}

<?php
include('config.php');
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$deskripsi = $_POST['Deskripsi'];
$query = mysqli_query($connect, "INSERT INTO pengguna (Nama, Email, Deskripsi) 
                            VALUES ('$nama', '$email', '$deskripsi')");
if ($query) {
    echo "<script>alert('Data telah ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.php'>";
} else {
    echo "<script>alert('Gagal ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='1 url = index.php'>";
}

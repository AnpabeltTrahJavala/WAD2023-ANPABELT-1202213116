<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

include("form_update_mobil.php");
include("connect.php");


// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

// (3) Buatkan fungsi "update" yang menerima data sebagai parameter
if (isset($_GET['update']))

    // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
    $id = $id;
$nama_mobil = $_POST['nama_mobil'];
$brand_mobil = $_POST['brand_mobil'];
$warna_mobil = $_POST['warna_mobil'];
$tipe_mobil = $_POST['tipe_mobil'];
$harga_mobil = $_POST['harga_mobil'];


// Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

// Eksekusi perintah SQL

// Buatkan kondisi jika eksekusi query berhasil
// Jika terdapat kesalahan, buatkan eksekusi query gagalnya

// Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>
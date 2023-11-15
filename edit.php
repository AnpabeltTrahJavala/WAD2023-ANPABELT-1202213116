<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL 3 - EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLm9Nao@Yz1ztcQTwFspd3yD65VohhpuuCOLASJC" crossorigin="anonymous">
</head>

<body>
    <?php
    include('config.php');

    // Melakukan Proses Get data yang akan diubah
    $id = 1;
    $query = mysqli_query($connect, "SELECT * FROM pengguna WHERE id = '$id'");

    if ($query) {
        $data = mysqli_fetch_assoc($query);
    ?>
        <div class="container mt-5" style="width:500px">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $data['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="name@example.com" name="email" value="<?= $data['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="3" name="deskripsi"><?= $data['deskripsi'] ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Ubah" name="ubah">
            </form>
        </div>
    <?php
    }

    // Melakukan Proses Perubahan Data
    if (isset($_POST['ubah'])) {
        $id = $id;
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $deskripsi = $_POST['deskripsi'];

        mysqli_query($connect, "UPDATE pengguna SET nama='$nama', email='$email', deskripsi='$deskripsi' WHERE id='$id'");
        header("Location: read.php");
    }
    ?>
</body>

</html>
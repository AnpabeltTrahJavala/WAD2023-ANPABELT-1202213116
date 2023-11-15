<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLm9Nao@Yz1ztcQTwFspd3yD65VohhpuuCOLASJC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5" style="width:50%">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menggunakan query sql untuk menampilkan database 
                $query = mysqli_query($connect, "SELECT * FROM pengguna");
                // Mengecek apakah varibel query berjalan 
                if ($query) {
                    while ($selects = mysqli_fetch_assoc($query)) {

                ?>
                        <tr>
                            <th scope="row"><?= $selects['id'] ?></th>
                            <td><?= $selects['Nama'] ?></td>
                            <td><?= $selects['Email'] ?></td>
                            <td><?= $selects['Deskripsi'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
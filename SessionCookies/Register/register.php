<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAD Modul 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-primary">
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="card px-5 py-5">
                    <h2 class="text-center mb-3">Register</h2>
                    <!-- Alert message menggunakan session -->
                    <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php unset($_SESSION['message']);
                    } ?>

                    <form method="post" action="authentication.php">
                        <label for="username" class="form-label bold">Username</label>
                        <input type="text" id="username" class="form-control mb-3" name="username"
                            placeholder="Username" required>
                        <label for="nama" class="form-label bold">Nama</label>
                        <input type="text" id="nama" class="form-control mb-3" name="name" placeholder="Nama" required>
                        <label for="phone" class="form-label bold">Nomor Telepon</label>
                        <input type="text" id="phone" class="form-control mb-3" name="phone" placeholder="Nomor Telepon"
                            required>
                        <label for="pass" class="form-label bold">Password</label>
                        <input type="password" id="pass" class="form-control mb-3" name="password"
                            placeholder="Kata Sandi" required>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary px-5 w-100">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">Sudah punya akun? <a href="authentication.php">Login</a></div>
            </div>
        </div>
    </div>
</body>

</html>
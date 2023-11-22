<?php
// Start the session
session_start();

// Include the login logic

require 'login.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    login($_POST);
}
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
                    <!-- Template ketika user belum login -->
                    <?php if (!isset($_SESSION['login'])) { ?>
                    <h2 class="text-center mb-3">Login</h2>
                    <!-- Alert message menggunakan session -->
                    <?php if (isset($_SESSION['message']) and isset($_SESSION['color'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['color']; ?>" role="alert">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                            unset($_SESSION['message']);
                        }
                        ?>

                    <form method="post" action="">
                        <label for="username" class="form-label bold">Username</label>
                        <input type="text" id="username" class="form-control mb-3" name="username"
                            placeholder="Username" required>
                        <label for="pass" class="form-label bold">Password</label>
                        <input type="password" id="pass" class="form-control mb-3" name="password"
                            placeholder="Kata Sandi" required>
                        <input type="checkbox" id="check" class="form-check-input" name="remember">
                        <label for="check" class="form-check-label" for="check">Remember me</label>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary px-5 w-100">Login</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">Belum punya akun? <a href="register.php">Daftar</a></div>
                    <!-- Template ketika user sudah login -->
                    <?php } else { ?>
                    <h2 class="text-center mb-3">Selamat datang, <?php echo $_SESSION['username']; ?></h2>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
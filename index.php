<?php
require_once 'login-register-check.php';
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // ambil data ke database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: main.php?page=beranda");
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<h lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>NCF</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
        <!-- style CSS-->
        <link rel="stylesheet" href="assets/style/style.css">
    </head>

    <body>
        <div class="card">
            <h3>
                Silahkan Login
            </h3>
            <div class="card-body">
                <div class="container-fluid">
                    <?php
                    if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Username / Password yang anda masukan salah.
                        </div>
                    <?php endif; ?>
                    <div class="form">
                        <form action="" method="post">
                            <ul style="list-style: none;">
                                <li>
                                    <div class="mb-1 col-8">
                                        <input type="username" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="mb-1 col-8">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                                    </div>
                                </li>
                                <li>
                                    <button type="submit" name="login" id="login" class="btn btn-primary mb-1 col-8">Login</button>
                                </li>
                                <li>
                                    <a name="registrasi" id="registrasi" class="btn btn-primary" href="index-register.php" role="button">Registrasi</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
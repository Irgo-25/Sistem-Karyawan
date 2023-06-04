<?php
// memanggil database
require_once 'database/function.php';

// function register
function registrasi($register)
{
    global $conn;
    $username = $register["username"];
    $password = mysqli_real_escape_string($conn, $register["password"]);
    $password2 = mysqli_real_escape_string($conn, $register["password2"]);
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('User sudah tersedia')</script>";
        return false;
    }
    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
             alert('Pastikan Password yang anda masukan benar');
             </script>";
        return false;
    }

    // enkripsi password dengan password_hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
}

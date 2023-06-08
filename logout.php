<?php
session_start();

unset($_SESSION["username"]);
unset($_SESSION["password"]);
//menghapus session
session_destroy();

header("location: index.php");

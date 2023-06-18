<?php
require "../../database/function.php";
$id = $_GET["nik"];

if (hapus($id) > 0) {
    header("location: ../../main.php?page=data_karyawan&alert=3");
}

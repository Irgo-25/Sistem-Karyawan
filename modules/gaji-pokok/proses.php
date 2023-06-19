<?php
require "../../database/function.php";
$id_gapok = $_GET["id_gapok"];

if (deleteSalary($id_gapok) > 0) {
    header("location: ../../main.php?page=gaji_pokok&alert=3");
}
die;

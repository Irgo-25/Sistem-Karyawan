<?php
// koneksi database

$conn = mysqli_connect("localhost", "root", "", "sik");

// fungsi menampilkan data karyawan
function view($karyawan)
{
    global $conn;
    $result = mysqli_query($conn, $karyawan);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $fullname = htmlspecialchars($data["nama"]);
    $age = htmlspecialchars($data["umur"]);
    $dept = htmlspecialchars($data["dept"]);
    $jabatan = htmlspecialchars($data["Jabatan"]);
    $address = htmlspecialchars($data["alamat"]);
    $entryDate = htmlspecialchars($data["tanggal_masuk"]);
    // query insert data
    $query = "INSERT INTO data_karyawan
            VALUES ('', '$nik', '$fullname', '$age', '$dept', '$jabatan', '$address', '$entryDate')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// 
function hapus($nik)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_karyawan WHERE nik = $nik");
    return mysqli_affected_rows($conn);
}
function edit($data)
{
    global $conn;
    $id = $data["id_karyawan"];
    $nik = htmlspecialchars($data["nik"]);
    $fullname = htmlspecialchars($data["nama"]);
    $age = htmlspecialchars($data["umur"]);
    $dept = htmlspecialchars($data["dept"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $address = htmlspecialchars($data["alamat"]);
    $entryDate = htmlspecialchars($data["tanggal_masuk"]);
    // query insert data
    $query = "UPDATE data_karyawan SET
                nik = '$nik',
                nama = '$fullname',
                umur = '$age',
                dept = '$dept',
                posisi = '$jabatan',
                alamat = '$address',
                tanggal_masuk = '$entryDate'
                WHERE id_karyawan = $id 
                
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Menampilkan data gaji pokok dari database
function viewSalary($gapok)
{
    global $conn;
    $result = mysqli_query($conn, $gapok);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// function untuk menambah data gaji pokok
function addGapok($salary)
{
    global $conn;
    $pokok = ($salary["gaji_utama"]);
    $jabatan = htmlspecialchars($salary["jabatan"]);

    $gapok2 = "INSERT INTO gaji_pokok VALUES('', '$pokok','$jabatan')";

    mysqli_query($conn, $gapok2);
    return mysqli_affected_rows($conn);
}

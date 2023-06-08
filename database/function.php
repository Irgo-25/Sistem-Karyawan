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
    $posisi = htmlspecialchars($data["posisi"]);
    $address = htmlspecialchars($data["alamat"]);
    $entryDate = htmlspecialchars($data["tanggal_masuk"]);
    // query insert data
    $query = "INSERT INTO data_karyawan
            VALUES ('', '$nik', '$fullname', '$age', '$dept', '$posisi', '$address', '$entryDate')";
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
    $posisi = htmlspecialchars($data["posisi"]);
    $address = htmlspecialchars($data["alamat"]);
    $entryDate = htmlspecialchars($data["tanggal_masuk"]);
    // query insert data
    $query = "UPDATE data_karyawan SET
                nik = '$nik',
                nama = '$fullname',
                umur = '$age',
                dept = '$dept',
                posisi = '$posisi',
                alamat = '$address',
                tanggal_masuk = '$entryDate'
                WHERE id_karyawan = $id 
                
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

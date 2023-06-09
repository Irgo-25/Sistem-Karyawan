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
    $jabatan = htmlspecialchars($data["jabatan"]);
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
                jabatan = '$jabatan',
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

    $add_gapok = "INSERT INTO gaji_pokok VALUES('', '$pokok','$jabatan')";

    mysqli_query($conn, $add_gapok);
    return mysqli_affected_rows($conn);
}
function editSalary($salary)
{
    global $conn;
    // memanggil data gaji pokok dari database
    $id_gapok = htmlspecialchars($salary["id_gapok"]);
    $main_salary = htmlspecialchars($salary["gaji_utama"]);
    $jabatan = htmlspecialchars($salary["jabatan"]);
    // update data ke database
    $update_salary = "UPDATE gaji_pokok SET
                     gaji_utama = '$main_salary',
                    jabatan = '$jabatan'
                    WHERE id_gapok = $id_gapok
                    ";
    mysqli_query($conn, $update_salary);
    return mysqli_affected_rows($conn);
}
function deleteSalary($id_gapok)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM gaji_pokok WHERE id_gapok = $id_gapok");
    return mysqli_affected_rows($conn);
}
// Menampilkan data gaji karyawan dari database
function viewSalaryKaryawan($gajiKaryawan)
{
    global $conn;
    $result = mysqli_query($conn, $gajiKaryawan);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function editGajiKaryawan($salaryKaryawan)
{
    global $conn;
    $id_karyawan = htmlspecialchars($salaryKaryawan["id_karyawan"]);
    $nama = htmlspecialchars($salaryKaryawan["nama"]);
}

<?php
if ($_POST) {
    // Collecting form data
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Validation
    if (empty($nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($no_telp)) {
        echo "<script>alert('Nomor Telp tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($gender)) {
        echo "<script>alert('Gender tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($jabatan)) {
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='addPegawai.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='addPegawai.php';</script>";
    } else {
        // Database connection
        include "koneksi.php";

        // Insert query
        $insert = mysqli_query($conn, "INSERT INTO pegawai (nama, no_telp, nik, alamat, gender, id_jabatan, password, username) VALUES ('$nama', '$no_telp', '$nik', '$alamat', '$gender', '$jabatan', MD5('$password'), '$username')") or die(mysqli_error($conn));

        // Check if the insertion was successful
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='addPegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='addPegawai.php';</script>";
        }
    }
}
?>

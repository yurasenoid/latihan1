<?php
if ($_POST) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['jabatan'];

    // Validation
    if (empty($nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='editPegawai.php?id_pegawai=$id_pegawai';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='editPegawai.php?id_pegawai=$id_pegawai';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE pegawai SET nama = '$nama',no_telp = '$no_telp', nik = '$nik', alamat = '$alamat', gender = '$gender', username = '$username', id_jabatan = '$id_jabatan'WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($conn));
        } else {
            // If password is provided, update with the new password
            $update = mysqli_query($conn, "UPDATE pegawai SET nama = '$nama',no_telp = '$no_telp',nik = '$nik',alamat = '$alamat',gender = '$gender',username = '$username',password = MD5('$password'),id_jabatan = '$id_jabatan'WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($conn));
        }

        // Check if the update was successful
        if ($update) {
            echo "<script>alert('Sukses update pegawai');location.href='showPegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal update pegawai');location.href='editPegawai.php?id_pegawai=$id_pegawai';</script>";
        }
    }
}

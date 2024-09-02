<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];

    if (empty($nama)) {
        echo "<script>alert('Nama Jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($gaji)) {
        echo "<script>alert('Gaji Pokok tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($tunjangan)) {
        echo "<script>alert('Tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO jabatan (nama_jabatan, gaji_pokok, tunjangan) VALUES ('".$nama."', '".$gaji."', '".$tunjangan."')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan jabatan');location.href='addJabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='addJabatan.php';</script>";
        }
    }
}
?>

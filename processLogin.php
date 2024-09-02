<?php
session_start();
include "koneksi.php";

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo "<script>alert('Username ');location.href='login.php';</script>";
    } 
    elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    }
    else {
        $qry_Pegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE username = '$username'");
            $data_admin = mysqli_fetch_array($qry_Pegawai);
            if ($data_admin['password'] == MD5($password)) {
                $_SESSION['id_admin'] = $data_admin['id_admin'];
                $_SESSION['nama_admin'] = $data_admin['name'];
                $_SESSION['status_login'] = true;
                $_SESSION['role'] = 'pegawai';
                header("Location:home.php");
            } else {
                echo "<script>alert('Password salah');location.href='login.php';</script>";
            }
        } 
    }
<?php
    if($_POST){
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='index.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='index.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='index.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into form (nama, nomor, email, username, password)
            value ('".$nama."','".$nomor."','".$email."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan user');location.href='index.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan user');location.href='index.php';</script>";
            }
        }
    }
?>
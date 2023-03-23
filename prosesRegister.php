<?php
    session_start();

    if($_POST['password'] != $_POST['confirmPassword']){
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['NISN'] = $_POST['NISN'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['latitude'] = $_POST['latitude'];
        $_SESSION['longitude'] = $_POST['longitude'];
        $_SESSION['pasFoto'] = $_POST['pasFoto'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['salah'] = "Konfirmasi Salah!";
        header("location: formRegis.php");
        exit;
    }else{
        session_unset();
        echo "hehe";
        // echo date('d-m-Y', strtotime($_post['tanggalLahir']));
        // echo  $_SESSION['pasFoto'];
        // echo date('Y-m-d',strtotime($_SESSION['tanggalLahir']));
    }
?>
<?php
session_start();

define('DSN', 'mysql:host=localhost;dbname=utswebpro');
define('DBUSER','root');  
define('DBPASS','');

$db = new PDO(DSN, DBUSER, DBPASS);

$email = $_POST['email'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

$sql = "SELECT * FROM siswa WHERE email = ?";
$stmt = $db -> prepare($sql);
$stmt -> execute([$email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$row)
{
    unset($_SESSION['captcha']);
    $_SESSION['error'] = "Username/Password/Captcha Salah";
    header('location: loginSiswa.php');
}else
{
    if($_SESSION['phrase'] != $captcha){
        unset($_SESSION['phrase']);
        $_SESSION['error'] = "Captcha Salah";
        header('location: loginSiswa.php');
    }else if(!password_verify($password, $row['Password'])){
        unset($_SESSION['phrase']);
        $_SESSION['error'] = "Username/Password Salah";
        header('location: loginSiswa.php');
    }else{
        unset($_SESSION['phrase']);
        $_SESSION['userid'] = $row['IDsiswa'];
        header('location: Siswa.php');
    }
}

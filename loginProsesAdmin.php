<?php
    session_start();

    define('DSN', 'mysql:host=localhost;dbname=utswebpro');
    define('DBUSER', 'root');
    define('DBPASS', '');

    $db = new PDO(DSN, DBUSER, DBPASS);

    $id = $_POST['email'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    $sql = "SELECT * FROM admin WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        unset($_SESSION['captcha']);
        $_SESSION['error'] = "Username/Password/Captcha Salah";
        header('location: loginAdmin.php');
    } else {
        if($_SESSION['phrase'] != $captcha){
            unset($_SESSION['phrase']);
            $_SESSION['error'] = "Captcha Salah";
            header('location: loginAdmin.php');
        }else if($password != $row['pass']){
            unset($_SESSION['phrase']);
            $_SESSION['error'] = "Username/Password Salah";
            header('location: loginAdmin.php');
        }else{
            unset($_SESSION['phrase']);
            $_SESSION['error'] = "sdasda";
            $_SESSION['email'] = $id;
            header('location: ProfileAdmin.php');
        }
    }
?>
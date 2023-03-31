<?php
define('DSN', 'mysql:host=localhost;dbname=sekolah_lmao');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);

    $email = $_POST['email'];
    $password = $_POST['password'];
    $priv = "fake";
    $sql = "INSERT INTO admin (id, pass, priv) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $password, $priv]);
    header('location: AddUsers.php');
    exit();
?>
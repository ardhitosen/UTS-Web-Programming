<?php

define('DSN', 'mysql:host=localhost;dbname=sekolah_lmao');
define('DBUSER','root');  
define('DBPASS','');

$db = new PDO(DSN, DBUSER, DBPASS);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM siswa WHERE email = ?";
$stmt = $db -> prepare($sql);
$stmt -> execute([$email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$userid = $row['id'];

if(!$row)
{
    echo "Wrong username/password";
}else
{
    if($password != $row['pass']){
        echo "Wrong username/password";
    }else{

        header('location: Siswa.php?id=' . $userid);
    }
}

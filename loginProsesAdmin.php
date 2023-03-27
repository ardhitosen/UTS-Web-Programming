<?php

define('DSN', 'mysql:host=localhost;dbname=sekolah_lmao');
define('DBUSER','root');  
define('DBPASS','');

$db = new PDO(DSN, DBUSER, DBPASS);

$id = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE id = ?";
$stmt = $db -> prepare($sql);
$stmt -> execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$row)
{
    echo "Wrong username/password";
}else
{
    if($password != $row['pass']){
        echo "Wrong username/password";
    }else{
        header('location: ProfileAdmin.php');
    }
}

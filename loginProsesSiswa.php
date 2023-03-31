<?php
session_start();

define('DSN', 'mysql:host=localhost;dbname=utswebpro');
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
    if(password_verify($password, $row['Password'])){
        echo "Wrong username/password";
    }else{
        $_SESSION['userid'] = $row['IDsiswa'];
        header('location: Siswa.php');
    }
}

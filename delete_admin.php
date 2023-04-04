<?php
define('DSN', 'mysql:host=localhost;dbname=utswebpro');
define('DBUSER', 'root');
define('DBPASS', '');
$id = $_GET['id'];
$db = new PDO(DSN, DBUSER, DBPASS);
$sql = "DELETE FROM admin WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$id]);
header('location: AddUsers.php');

?>
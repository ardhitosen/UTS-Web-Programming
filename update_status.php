<?php
$db = new PDO('mysql:host=localhost;dbname=utswebpro', 'root', '');

$id = $_POST['id'];
$status = $_POST['status'];

$stmt = $db->prepare('UPDATE siswa SET status = ? WHERE IDsiswa = ?');
$stmt->execute([$status, $id]);

header('Location: ProfileAdmin.php');
exit();
?>
<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=sekolah_lmao', 'root', '');

// Get form data
$id = $_POST['id'];
$status = $_POST['status'];

// Update status in database
$stmt = $db->prepare('UPDATE siswa SET status = ? WHERE IDsiswa = ?');
$stmt->execute([$status, $id]);

// Redirect back to the main page
header('Location: dataPendaftar.php');
exit();
?>
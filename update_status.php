<?php

use PhpOffice\PhpSpreadsheet\Worksheet\Row;

$db = new PDO('mysql:host=localhost;dbname=utswebpro', 'root', '');

$id = $_POST['id'];
$status = $_POST['status'];

$stmt = $db->prepare('UPDATE siswa SET status = ? WHERE IDsiswa = ?');
$stmt->execute([$status, $id]);

if($status == "Diterima"){
$status1 =  "Approved";
$stmt = $db->prepare('UPDATE berkas SET Status = ? WHERE IDberkas = ?');
$stmt->execute([$status1, $id]);

$status1 = "Diterima";
while(1){
    $nis = rand(1111, 9999);
    $stmt = $db->prepare('SELECT nis FROM siswa WHERE nis = ?');
    $stmt->execute([$nis]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$row){    
        $stmt = $db->prepare('UPDATE siswa SET Status = ?, nis = ? WHERE IDsiswa = ?');
        $stmt->execute([$status1, $nis, $id]); break;
    }else{
        continue;
    }
}
}else{
    $status1 = "File Ditolak";
    $stmt = $db->prepare('UPDATE berkas SET Status = ? WHERE IDberkas = ?');
    $stmt->execute([$status1, $id]);
}



header('Location: dataPendaftar.php');
exit();
?>
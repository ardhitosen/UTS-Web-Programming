<?php
session_start();
require_once('vendor/fpdf.php');
// $dsn = "mysql:host=localhost;dbname=sekolah_lmao";
// $db = new PDO($dsn, "root", "");

// $id = $_SESSION['userid'];

// $sql = "SELECT Nama FROM siswa WHERE IDsiswa = {'$id'}";
// $hasil = $db->query($sql);
// $row = $hasil->fetch(PDO::FETCH_ASSOC);

$nis = mt_rand(1000,9999);

$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();
$pdf->Image('image/background.jpg',90,10,100);
$pdf->SetFont('Arial','B',50);
//$pdf->Cell(10,160,"Nama: ".$row['Nama'],0);
$pdf->Cell(10,160,"Nama: ",0); //buat tes
$pdf->MultiCell(0,75,"");
$pdf->Cell(10,110,"NIS: ".$nis,0);
$pdf->Output();
?>     
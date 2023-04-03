<?php
session_start();
require_once('vendor/fpdf.php');
// $dsn = "mysql:host=localhost;dbname=utswebpro";
// $db = new PDO($dsn, "root", "");

// $sql = "SELECT Nama FROM siswa WHERE IDsiswa = {'$id'}";
// $hasil = $db->query($sql);
// $row = $hasil->fetch(PDO::FETCH_ASSOC);

$nis = mt_rand(1000,9999);
$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();

$pdf->Image('image/header.jpeg',50,10,200);
$pdf->SetFont('Arial','B',20);
$pdf->MultiCell(100,80,"");
$pdf->SetX(80);
//$pdf->Cell(10,160,"Nama: ".$row['Nama'],0);
$pdf->Cell(1,10,"Nama: ",0,2); //buat tes
$pdf->Cell(1,10,"NIS: ".$nis,0,2);

$pdf->Image('image/photopas.jpg',20,58,58);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(100,10,"");

$pdf->Output();

?>     
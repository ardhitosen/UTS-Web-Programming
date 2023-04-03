<?php
session_start();
require_once('vendor/fpdf.php');
$dsn = "mysql:host=localhost;dbname=utswebpro";
$db = new PDO($dsn, "root", "");
$id = $_SESSION['id'];
$sql = "SELECT * FROM siswa WHERE IDsiswa = '{$id}'";
$hasil = $db->query($sql);
$row = $hasil->fetch(PDO::FETCH_ASSOC);


$nis = mt_rand(1000,9999);
$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();

$pdf->Image("image/header.jpeg",90,10,100,30);
$pdf->Image($row['Pas Foto'],20,58,58);
$pdf->SetFont('Arial','B',20);
$pdf->MultiCell(100,80,"");
$pdf->SetX(80);
$pdf->Cell(1,30,"Nama: ".$row['Nama'],0);
$pdf->Cell(1,10,"NIS: ".$row['nis'],0,2);

$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(100,10,"");

$pdf->Output();

?>     
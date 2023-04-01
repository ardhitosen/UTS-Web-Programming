<?php
session_start();
require_once('vendor/fpdf.php');



$nis = mt_rand(900,1000);
$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();

$pdf->Image('image/header.jpeg',50,10,200);
$pdf->SetFont('Arial','B',20);
//$pdf->Cell(10,160,"Nama: ".$row['Nama'],0);
$pdf->Cell(100,100,"Nama: ",500); //buat tes
$pdf->MultiCell(100,10,"");
$pdf->Cell(100,100,"NIS: ".$nis,500);

$pdf->Image('image/photopas.jpg',20,58,58);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(100,10,"");

$pdf->Output();

?>     
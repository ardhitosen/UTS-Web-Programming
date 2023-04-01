<?php
session_start();
require_once('vendor/fpdf.php');
<<<<<<< Updated upstream
// $dsn = "mysql:host=localhost;dbname=sekolah_lmao";
// $db = new PDO($dsn, "root", "");
=======
/*$dsn = "mysql:host=localhost;dbname=sekolah_lmao";
$db = new PDO($dsn, "root", "");
>>>>>>> Stashed changes

// $id = $_SESSION['userid'];

<<<<<<< Updated upstream
// $sql = "SELECT Nama FROM siswa WHERE IDsiswa = {'$id'}";
// $hasil = $db->query($sql);
// $row = $hasil->fetch(PDO::FETCH_ASSOC);

$nis = mt_rand(1000,9999);
=======
$sql = "SELECT Nama FROM siswa WHERE IDsiswa = {'$id'}";
$hasil = $db->query($sql);
$row = $hasil->fetch(PDO::FETCH_ASSOC);*/
>>>>>>> Stashed changes

$nis = mt_rand(900,1000);
$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();
<<<<<<< Updated upstream
$pdf->Image('image/background.jpg',90,10,100);
$pdf->SetFont('Arial','B',50);
//$pdf->Cell(10,160,"Nama: ".$row['Nama'],0);
$pdf->Cell(10,160,"Nama: ",0); //buat tes
$pdf->MultiCell(0,75,"");
$pdf->Cell(10,110,"NIS: ".$nis,0);
=======
$pdf->Image('image/background.jpg',20,50,50);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,160,"Nama: "/*.$row['Nama']*/,0);
$pdf->MultiCell(0,10,"");
$pdf->Cell(10,160,"NIS: ".$nis,0);
>>>>>>> Stashed changes
$pdf->Output();

?>     
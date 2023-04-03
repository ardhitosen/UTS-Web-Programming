<?php
require_once 'vendor/fpdf.php';
function calculateDistance($lat1, $lon1, $lat2, $lon2)
{
    $R = 6371;
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    $lat1 = deg2rad($lat1);
    $lat2 = deg2rad($lat2);

    $a = sin($dLat / 2) * sin($dLat / 2) + sin($dLon / 2) * sin($dLon / 2) * cos($lat1) * cos($lat2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $R * $c;

    return $distance;
}
$dsn = "mysql:host=localhost;dbname=utswebpro";
    $kunci = new PDO($dsn, "root", "");
    $sql2 = "SELECT * FROM siswa WHERE Status='Belum Terdaftar'";
    $hasil = $kunci->query($sql2);
    $pdf = new FPDF();

    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 16);

    $pdf->Cell(40, 10, 'Name', 1);
    $pdf->Cell(40, 10, 'Date of Birth', 1);
    $pdf->Cell(40, 10, 'Place of Birth', 1);
    $pdf->Cell(40, 10, 'Age', 1);
    $pdf->Cell(40, 10, 'Distance', 1);

    while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
        $stmt = $kunci->prepare('SELECT DATEDIFF(CURDATE(), `Tanggal Lahir`)/365 AS age FROM siswa WHERE IDsiswa = ?');
        $stmt->execute([$row['IDsiswa']]);
        $age = $stmt->fetchColumn();

        $pdf->Ln();
        $pdf->Cell(40, 10, $row['Nama'], 1);
        $pdf->Cell(40, 10, $row['Tanggal Lahir'], 1);
        $pdf->Cell(40, 10, $row['Tempat Lahir'], 1);
        $pdf->Cell(40, 10, floor($age), 1);
        $pdf->Cell(40, 10, ceil(calculateDistance($row['Latitute'], $row['Longitute'], -6.257566, 106.618279)) . ' Km', 1);
    }

    $pdf->Output();
    exit;
?>
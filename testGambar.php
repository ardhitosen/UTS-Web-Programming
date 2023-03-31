<?php

use PhpOffice\PhpSpreadsheet\Worksheet\Row;

    $dsn = "mysql:host=localhost;dbname=utswebpro";
    $db = new PDO($dsn, "root", "");

    $sql = "SELECT `Pas Foto` FROM siswa";
    $hasil = $db->query($sql);

    $row = $hasil->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $row['Pas Foto']?>" style="width: 5%; height: 5%">
</body>
</html>
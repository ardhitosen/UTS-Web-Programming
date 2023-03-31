<?php
    session_start();

    $filename = $_FILES['pasFoto']['name'];
    $temp_file = $_FILES['pasFoto']['tmp_name'];
    $file_ext = explode(".", $filename);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);
    switch($file_ext){
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'svg':
        case 'webp':
        case 'bmp':
        case 'gif':
            break;
        default: $_SESSION['salah'] = " Jenis File Salah";
                $_SESSION['nama'] = $_POST['nama'];
                $_SESSION['NISN'] = $_POST['NISN'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
                $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
                $_SESSION['alamat'] = $_POST['alamat'];
                $_SESSION['latitude'] = $_POST['latitude'];
                $_SESSION['longitude'] = $_POST['longitude'];
                $_SESSION['pasFoto'] = $_POST['pasFoto'];
                $_SESSION['password'] = $_POST['password'];
                header("location:formRegis.php");
                exit;
    }

    if($_POST['password'] != $_POST['confirmPassword']){
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['NISN'] = $_POST['NISN'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['latitude'] = $_POST['latitude'];
        $_SESSION['longitude'] = $_POST['longitude'];
        $_SESSION['pasFoto'] = $_POST['pasFoto'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['salah'] = "Konfirmasi Salah!";
        header("location: formRegis.php");
        exit;
    }else if($_SESSION['phrase'] != $_POST['captcha']){
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['NISN'] = $_POST['NISN'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['latitude'] = $_POST['latitude'];
        $_SESSION['longitude'] = $_POST['longitude'];
        $_SESSION['pasFoto'] = $_POST['pasFoto'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['salah'] = "Captcha Salah!";
        header("location: formRegis.php");
        exit;
    }else{
        session_unset();
        $dsn = "mysql:host=localhost;dbname=utswebpro";
        $db = new PDO($dsn, "root", "");
        
        $nama = $_POST['nama'];
        $NISN = $_POST['NISN'];
        $email = $_POST['email'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $alamat = $_POST['alamat'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        // $filename = basename($_FILES['pasFoto'] ['name']);
        // $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        // $pasFoto = $_FILES['pasFoto'] ['tmp_name'];
        // $pasContent = addslashes(file_get_contents($pasFoto));
    
        move_uploaded_file($temp_file, "pasFoto/{$filename}");
        $path = "pasFoto/{$filename}";

        $password = $_POST['password'];
        $en_pass = password_hash($password, PASSWORD_BCRYPT);
        
        $securityKey = rand(100000, 999999);

        $sql = "INSERT INTO siswa (NISN ,Nama, email, `Tempat Lahir`, `Tanggal Lahir`, Alamat, Latitute, Longitute, `Pas Foto`, Password, Status, `recovery key`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $db->prepare($sql);
        $result->execute([$NISN, $nama, $email, $tempatLahir, $tanggalLahir, $alamat, $latitude, $longitude, $path, $en_pass, "Belum Terdaftar", $securityKey]);

        $sql = "INSERT INTO berkas (IDberkas) SELECT IDsiswa FROM siswa ORDER BY IDsiswa desc LIMIT 1";
        $result = $db->query($sql);

        $sql = "SELECT IDsiswa FROM siswa ORDER BY IDsiswa DESC limit 1";
        $hasil = $db->query($sql);
        $row = $hasil->fetch(PDO::FETCH_ASSOC);

        $sql = "UPDATE siswa SET berkas = {$row['IDsiswa']} WHERE IDsiswa = {$row['IDsiswa']}";
        $hasil = $db->query($sql);

        header('location: index.php');
    }
?>
<?php
    session_start();

    $filename = $_FILES['ijazah']['name'];
    $temp_file = $_FILES['ijazah']['tmp_name'];
    $file_ext = explode(".", $filename);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);

    $filename2 = $_FILES['akteLahir']['name'];
    $temp_file2 = $_FILES['akteLahir']['tmp_name'];
    $file_ext2 = explode(".", $filename2);
    $file_ext2 = end($file_ext2);
    $file_ext2 = strtolower($file_ext2);

    switch($file_ext){
        case 'pdf':
            break;
        default: $_SESSION['salah'] = " Jenis File Salah";
                $_SESSION['namaAyah'] = $_POST['namaAyah'];
                $_SESSION['namaIbu'] = $_POST['namaIbu'];
                header("location:formBerkas.php");
                exit;
    }

    switch($file_ext2){
        case 'pdf':
            break;
        default: $_SESSION['salah'] = " Jenis File Salah";
                $_SESSION['namaAyah'] = $_POST['namaAyah'];
                $_SESSION['namaIbu'] = $_POST['namaIbu'];
                header("location:formBerkas.php");
                exit;
    }

    unset($_SESSION['salah']);
    unset($_SESSION['namaAyah']);
    unset($_SESSION['namaIbu']);
    $userid = $_SESSION['id'];
    $dsn = "mysql:host=localhost;dbname=utswebpro";
    $db = new PDO($dsn, "root", "");
    
    $namaAyah = $_POST['namaAyah'];
    $namaIbu = $_POST['namaIbu'];

    move_uploaded_file($temp_file, "ijazah/{$filename}");
    $path1 = "ijazah/{$filename}";
    move_uploaded_file($temp_file2, "akteLahir/{$filename2}");
    $path2 = "akteLahir/{$filename2}";

    $sql = "UPDATE berkas SET `Nama Ayah` = ?, `Nama Ibu` = ?, `Ijazah SD` = ?, `Akte Lahir` = ?, Status = ? WHERE IDberkas = ?";
    $result = $db->prepare($sql);
    $result->execute([$namaAyah, $namaIbu, $path1, $path2, "Belum Approved", $userid]);

    $sql = "UPDATE siswa SET Status = 'Belum Diterima' WHERE IDsiswa = ?";
    $result = $db->prepare($sql);
    $result->execute([$userid]);
    header('location: siswa.php');
?>
<?php
    session_start();
    require_once __DIR__.'/vendor/autoload.php';
    use Gregwar\Captcha\CaptchaBuilder;

    $builder = new CaptchaBuilder();
    $builder->build();
    $_SESSION['phrase'] = $builder->getPhrase();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h1>Formulir Registrasi PPDB Online</h1>
        <h4>Informasi Calon Peserta Didik</h4>
            <form method="post" action="prosesRegister.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="name" name="nama" value="<?php echo isset($_SESSION['nama'])? $_SESSION['nama'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Nomor Induk Siswa Nasional(NISN):</label>
                        <input type="text" class="form-control" id="name" name="NISN" value="<?php echo isset($_SESSION['NISN'])? $_SESSION['NISN'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" class="form-control" id="name" name="email" value="<?php echo isset($_SESSION['email'])? $_SESSION['email'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="age">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?php echo isset($_SESSION['tempatLahir'])? $_SESSION['tempatLahir'] : '' ?>" required>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?php echo isset($_SESSION['tanggalLahir'])? $_SESSION['tanggalLahir'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Alamat Rumah:</label>
                        <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?php echo isset($_SESSION['alamat'])? $_SESSION['alamat'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Alamat Rumah: (masukkan Latitude dan Longitude yang berada di Google Maps)</label>
                        <br />
                        <label>Latitude</label>
                        <input type="number" class="form-control" id="latitude" name="latitude" value="<?php echo isset($_SESSION['latitude'])? $_SESSION['latitude'] : '' ?>" required>
                        <label>Longitude</label>
                        <input type="number" class="form-control" id="longitude" name="longitude" value="<?php echo isset($_SESSION['longitude'])? $_SESSION['longitude'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Pas Foto:</label>
                        <input type="file" class="form-control" id="pasFoto" name="pasFoto" value="<?php echo isset($_SESSION['pasFoto'])? $_SESSION['pasFoto'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_SESSION['password'])? $_SESSION['password'] : '' ?>" required>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="name">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    <br/>
                    </div>
                    <div class="form-group">
                        <img src="<?php echo $builder->inline(); ?>" />
                        <input type="text"  class="border border-gray-300 rounded-lg py-2 px-3 w-full" placeholder="Masukkan Text Disamping" name="captcha" required>
                    </div>
                    <?php if(isset($_SESSION['salah'])) { ?>
                        <p class="alert alert-danger"><?php echo $_SESSION['salah']; ?></p>
                    <?php unset($_SESSION['salah']);} ?>
                    <br/>
                    <button id="register" type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
        </div>
    </body>
</html>
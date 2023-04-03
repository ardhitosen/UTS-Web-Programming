<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-5 mb-3">Form Berkas</h1>
      <form method="post" action="prosesBerkas.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="namaAyah">Nama Ayah:</label>
          <input type="text" class="form-control" id="namaAyah" name="namaAyah" value="<?php echo isset($_SESSION['namaAyah'])? $_SESSION['namaAyah'] : '' ?>" required>
        </div>
        <div class="form-group">
          <label for="namaIbu">Nama Ibu:</label>
          <input type="text" class="form-control" id="namaIbu" name="namaIbu" value="<?php echo isset($_SESSION['namaIbu'])? $_SESSION['namaIbu'] : '' ?>" required>
        </div>
        <div class="form-group">
          <label for="ijazah">Ijazah SD:</label>
          <input type="file" class="form-control" id="ijazah" name="ijazah" required>
        </div>
        <div class="form-group">
          <label for="akteLahir">Akte Lahir:</label>
          <input type="file" class="form-control" id="akteLahir" name="akteLahir" required>
        </div>
        <?php if(isset($_SESSION['salah'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['salah']; ?>
          </div>
          <?php unset($_SESSION['salah']); } ?>
        <button id="register" type="submit" class="btn btn-primary" name="register">Register</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-PpHpIhKYdMdKqJAT9DnYskZzC+hB8peHvzI5b5VC5g5LErGxLtfv5H9RfhoZ6NRc" crossorigin="anonymous"></script>
  </body>
</html>

<?php
session_start();
define('DSN', 'mysql:host=localhost;dbname=sekolah_lmao');
    define('DBUSER', 'root');
    define('DBPASS', '');

    $db = new PDO(DSN, DBUSER, DBPASS);
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql2 = "SELECT priv FROM admin WHERE id = ?";
    $stmt2 = $db->prepare($sql2);
    $stmt2->execute([$email]);
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);

    
} else {
    header('location: loginAdmin.php');
    exit();
}

if (isset($_POST['submit'])) {
    $newEmail = $_POST['email'];
    $sql = "UPDATE admin SET id = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$newEmail,$email]);
    $_SESSION['email'] = $newEmail;
    $email = $newEmail;
}

?>
<style>
    a.disabled {
    pointer-events: none;
    opacity: 0.5;
}
</style>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Menu</title>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profileAdmin.php">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataPendaftar.php">Data Pendaftar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="UploadBerkas.php">Upload Berkas</a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link <?php echo ($row['priv'] !== 'real') ? 'disabled' : ''; ?>" href="AddUsers.php">Add Users</a>
</li>

                </ul>
                </div>
            </div>
        </nav>
    </head>
    <body>

        <div class="container p-4 pb-0" style="background-color: #929fba">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h2 class="text-center text-lg-start text-white">
                            <marquee> WELCOME ADMIN! </marquee>
                        </h2>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://blog.minifigures.com/wp-content/uploads/2019/09/classic-smile.jpg" class="rounded-circle me-3" width="150" height="150" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                    <h5 class="card-title mb-4">Profile</h5>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>

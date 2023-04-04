<?php

define('DSN', 'mysql:host=localhost;dbname=utswebpro');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);
$email = $_GET['id'];

if (isset($_POST['submit'])) {
    $newEmail = $_POST['email'];
    $newPass = $_POST['pass'];
    $sql = "UPDATE admin SET id = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$newEmail, $email]);
    $sql2 = "UPDATE admin SET pass = ? WHERE id = ?";
    $stmt = $db->prepare($sql2);
    $stmt->execute([$newPass, $email]);
    header('location: AddUsers.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $db->prepare('SELECT * FROM admin WHERE id = ?');
    $stmt->execute([$id]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$admin) {
        header('location: AddUsers.php');
        exit();
    }
} else {
    header('location: AddUsers.php');
    exit();
}
?>

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
                            <a class="nav-link active" aria-current="page" href="admin.php">Upload Berkas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AddUsers.php">Add Users</a>
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
            <head>
                <title>Add Admin</title>
            </head>
            <h2>Edit Admin</h2>
            <form action="edit_admin.php?id=<?php echo $admin['id']; ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $admin['id']; ?>" required>
                    <label for="email">Password:</label>
                    <input type="text" id="pass" name="pass" class="form-control" value="<?php echo $admin['pass']; ?>" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


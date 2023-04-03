<?php
session_start();
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $recovery_key = $_POST['recovery_key'];
    $enpass = password_hash($new_password, PASSWORD_BCRYPT);

    define('DSN', 'mysql:host=localhost;dbname=utswebpro');
    define('DBUSER', 'root');
    define('DBPASS', '');

    $db = new PDO(DSN, DBUSER, DBPASS);

    $sql = "SELECT * FROM siswa WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        unset($_SESSION['notFound']);
        $_SESSION['notFound'] = "Email not found!";
    } else {
        $userid = $row['IDsiswa'];
        if ($recovery_key != $row['Recovery key']) {
            $_SESSION['notFound'] = "Recovery key salah";
        } else {

            $sql2 = "UPDATE siswa SET password= ? WHERE IDSiswa = ?";
            $stmt = $db->prepare($sql2);
            $stmt->execute([$enpass,$userid]);
            header('Location: loginSiswa.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title mb-4">Forgot Password</h1>
                            <form method="post">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="new_password">New Password:</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="recovery_key">Recovery Key:</label>
                                    <input type="text" class="form-control" name="recovery_key" required>
                                </div>
                                <?php if(isset($_SESSION['notFound'])){echo $_SESSION['notFound']; unset($_SESSION['notFound']);} ?>
                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3Xa8" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
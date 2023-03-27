
<?php
    require_once __DIR__.'/vendor/autoload.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <form method="post" action="proses_login.php">
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" id="name" name="email">
                </div>
                <div class="form-group">
                    <label for="age">Password</label>
                    <input type="password" class="form-control" id="age" name="password">
                </div>
                <div>
                    <a href="formLupaPassword.php">Lupa Password</a> atau 
                    <a href="formSignUp.php">Sign Up</a>
                </div>
                <button id="Login" type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
</html>
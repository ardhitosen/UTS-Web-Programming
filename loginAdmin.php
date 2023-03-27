<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
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
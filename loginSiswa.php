<?php
    session_start();
    require_once __DIR__.'/vendor/autoload.php';
    use Gregwar\Captcha\CaptchaBuilder;

    $builder = new CaptchaBuilder();
    $builder->build();
    $_SESSION['phrase'] = $builder->getPhrase();
?>

<html class="h-full">
    <head>
        <title>Login Siswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-full">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full space-y-4">
            <form method="post" action="loginProsesSiswa.php">
                <div class="space-y-2">
                    <label for="email" class="font-medium text-gray-700">Email</label>
                    <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 w-full" id="email" name="email" required>
                </div>
                <div class="space-y-2">
                    <label for="password" class="font-medium text-gray-700">Password</label>
                    <input type="password" class="border border-gray-300 rounded-lg py-2 px-3 w-full" id="password" name="password" required>
                </div>
                <div class="flex justify-between items-center">
                    <a href="forgotPass.php" class="text-blue-500">Lupa Password</a>
                    <a href="formRegis.php" class="text-blue-500">Sign Up</a>
                </div>
                <div class="flex justify-between items-center">
                    <img src="<?php echo $builder->inline(); ?>" />
                    <input type="text"  class="border border-gray-300 rounded-lg py-2 px-3 w-full" placeholder="Masukkan Text Disamping" name="captcha" required>
                </div>
                <?php if(isset($_SESSION['error'])) { ?>
                    <p class="text-red-500 mt-2"><?php echo $_SESSION['error']; ?></p>
                <?php unset($_SESSION['error']);} ?>
                <button id="Login" type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition duration-200 <?php if(isset($_SESSION['error'])) {echo 'mt-4';} ?>">Login</button>
            </form>
            <form action="index.php">
                    <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition duration-200" style="width:50%; margin-left: 100px;">Kembali</button>
            </form>
        </div>
    </body>
</html>

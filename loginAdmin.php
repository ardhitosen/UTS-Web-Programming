<?php
session_start();
require_once __DIR__.'/vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;

// $builder = new CaptchaBuilder();
// $builder->build();
// $_SESSION['phrase'] = $builder->getPhrase();

// if (isset($_POST['submit'])) {
//     define('DSN', 'mysql:host=localhost;dbname=utswebpro');
//     define('DBUSER', 'root');
//     define('DBPASS', '');

//     $db = new PDO(DSN, DBUSER, DBPASS);

//     $id = $_POST['email'];
//     $password = $_POST['password'];
//     $captcha = $_POST['captcha'];

//     $sql = "SELECT * FROM admin WHERE id = ?";
//     $stmt = $db->prepare($sql);
//     $stmt->execute([$id]);
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);

//     if (!$row) {
//         echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" style="margin-right:2%" role="alert">
//                   <strong class="font-bold">Oops!</strong>
//                   <span class="block sm:inline"> Wrong username or password.</span>
//               </div>';
//     } else {
//         if($_SESSION['phrase'] != $captcha){
//             echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
//             <strong class="font-bold">Oops!</strong>
//             <span class="block sm:inline"> Wrong username or password.</span>
//             </div>';
//         }if ($password != $row['pass']) {
//             echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
//                       <strong class="font-bold">Oops!</strong>
//                       <span class="block sm:inline"> Wrong username or password.</span>
//                   </div>';
//         } else {
//             $_SESSION['email'] = $id;
//             header('location: ProfileAdmin.php');
//             exit();
//         }
//     }



$builder = new CaptchaBuilder();
$builder->build();
$_SESSION['phrase'] = $builder->getPhrase();
?>

<html class="h-full">

<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-full">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full space-y-4">
        <form method="post" action="loginProsesAdmin.php">
            <div class="space-y-2">
                <label for="email" class="font-medium text-gray-700">Email</label>
                <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 w-full" id="email" name="email">
            </div>
            <div class="space-y-2" style="margin-bottom:3%">
                <label for="password" class="font-medium text-gray-700">Password</label>
                <input type="password" class="border border-gray-300 rounded-lg py-2 px-3 w-full" id="password" name="password">
            </div>
            <div class="flex justify-between items-center">
                <img src="<?php echo $builder->inline(); ?>" />
                <input type="text"  class="border border-gray-300 rounded-lg py-2 px-3 w-full" placeholder="Masukkan Text Disamping" name="captcha" required>
            </div>
            <?php if(isset($_SESSION['error'])) { ?>
                <p class="text-red-500 mt-2"><?php echo $_SESSION['error']; ?></p>
            <?php unset($_SESSION['error']);} ?>
            <?php echo $_SESSION['phrase'] ?>
            <button id="Login" type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition duration-200 <?php if(isset($_SESSION['error'])) {echo 'mt-4';} ?>">Login</button>
        </form>
    </div>
</body>

</html>

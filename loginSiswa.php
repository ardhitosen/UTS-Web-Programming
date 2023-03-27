<?php
    require_once __DIR__.'/vendor/autoload.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="max-w-md w-full space-y-8">
            <form method="post" action="proses_login.php" class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="text" class="form-input w-full" id="email" name="email">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" class="form-input w-full" id="password" name="password">
                </div>
                <div class="flex justify-between items-center mb-6">
                    <a href="formLupaPassword.php" class="text-sm text-gray-500 hover:text-gray-700">Lupa Password</a>
                    <a href="formSignUp.php" class="text-sm text-gray-500 hover:text-gray-700">Sign Up</a>
                </div>
                <button id="Login" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Login</button>
            </form>
        </div>
    </body>
</html>

<!DOCTYPE html>
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
            <div class="space-y-2">
                <label for="password" class="font-medium text-gray-700">Password</label>
                <input type="password" class="border border-gray-300 rounded-lg py-2 px-3 w-full" id="password" name="password">
            </div>
            <div class="flex justify-between items-center">
                <a href="formLupaPassword.php" class="text-blue-500">Lupa Password</a>
                <a href="formSignUp.php" class="text-blue-500">Sign Up</a>
            </div>
            <button id="Login" type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition duration-200">Login</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Form</title>
</head>

<body>
    <?php require 'partials/_nav.php'

    ?>
    <div  class="min-h-screen flex items-center justify-center">
    <div class="w-3/5 p-4 bg-white rounded shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-medium">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
        </form>
    </div>
    </div>
</body>

</html>
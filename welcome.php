<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php require "partials/_nav.php"

    ?>
    <!-- Page Container -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-green-500">
        <div class="text-center">
            <!-- Welcome Text -->
            <h1 class="text-4xl md:text-6xl text-white font-bold">Welcome to My Login System</h1>

            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-300 mt-4">Explore and enjoy the content!</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="/php-auth/signup.php" method="post" class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-6">Sign Up</h2>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded" name="email" placeholder="example@example.com">
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="Password" class="w-full p-2 border border-gray-300 rounded" placeholder="Password">
            </div>

            <!-- Confirm Password Input -->
            <div class="mb-6">
                <label for="confirm-password" class="block text-gray-600">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="w-full p-2 border border-gray-300 rounded" placeholder="Confirm Password">
            </div>

            <!-- Signup Button -->
            <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">Sign Up</button>
        </form>
    </div>
</body>

</html>
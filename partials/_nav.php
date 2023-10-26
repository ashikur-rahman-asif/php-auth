<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/php-auth" class="text-2xl font-semibold text-white">Login System</a>

            <!-- Mobile menu button (hamburger icon) -->
            <div class="md:hidden">
                <button class="text-white hover:text-gray-300 focus:outline-none">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex space-x-4">
                <a href="/php-auth/welcome.php" class="border border-4 p-3 text-white hover:text-gray-300">Home</a>
                <a href="/php-auth/signup.php" class="border border-4 p-3 text-white hover:text-gray-300">SignUp</a> 
                <a href="/php-auth/logout.php" class="border border-4 p-3 text-white hover:text-gray-300">Logout</a>
                <!-- <a href="#" class="text-white hover:text-gray-300">Services</a>
                <a href="#" class="text-white hover:text-gray-300">Contact</a> -->
            </div>

            <!-- Login button -->
            <a href="/php-auth/login.php" class="hidden md:block text-white hover:text-gray-300 border border-4 p-3">Login</a>
        </div>
    </nav>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja</title>

    @vite('resources/css/app.css')
</head>
<body class="container mx-auto">
    <header>
        <nav>
            <ul class="flex justify-center space-x-4 my-4">
                <li><a href="/">Home</a></li>
                <li><a href="/ninja">User</a></li>
                <li><a href="/add-ninja">Add New User</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="my-6 min-h-screen">
        {{ $slot }}
    </main>
    <footer>
        <p class="text-center">&copy; 2025 Ninja</p>
    </footer>
</body>
</html>
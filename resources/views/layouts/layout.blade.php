<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD Coffee - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-amber-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-amber-800 text-white py-6 text-center">
        <h1 class="text-3xl font-bold">GD Coffee</h1>
        <p class="text-lg mt-1">Nikmati kopi terbaik untuk hari Anda ☕</p>
    </header>

    <!-- Navbar -->
    <nav class="bg-amber-700 text-white">
        <ul class="flex justify-center gap-6 py-3">
            <li><a href="/" class="hover:text-yellow-300 transition">Home</a></li>
            <li><a href="/menu" class="hover:text-yellow-300 transition">Menu</a></li>
            <li><a href="/about" class="hover:text-yellow-300 transition">Tentang Kami</a></li>
            <li><a href="/contact" class="hover:text-yellow-300 transition">Kontak</a></li>
            <li><a href="/program" class="hover:text-yellow-300 transition">Program</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-amber-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2025 GD Coffee. All Rights Reserved.</p>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>GD Coffee - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h1>GD Coffee</h1>
        <p>Nikmati kopi terbaik untuk hari Anda ☕</p>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/about">Tentang Kami</a>
        <a href="/contact">Kontak</a>
        <a href="/program">Program</a>
    </nav>

    <div class="hero">
        <h2>Selamat Datang di GD Coffee</h2>
        <p>Kopi pilihan, suasana nyaman, dan momen terbaik bersama teman</p>
        <a href="/menu">Lihat Menu</a>
    </div>

    <div class="container">
        <h2 style="text-align:center; color:#6f4e37;">Rekomendasi Kami</h2>
        <div class="cards">
            <div class="card">
                <img src="{{ asset('images/espresso.jpeg') }}" alt="Espresso">
                <h3>Espresso</h3>
                <p>Kopi pekat dengan rasa kuat untuk memulai hari Anda.</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/cappucino.jpg') }}" alt="Latte">
                <h3>Cappuccino</h3>
                <p>Perpaduan sempurna espresso, susu, dan foam lembut.</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/latte.jpeg') }}" alt="Latte">
                <h3>Latte</h3>
                <p>Kopi lembut dengan sentuhan creamy yang menenangkan.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 GD Coffee. All Rights Reserved.</p>
    </footer>
</body>
</html>

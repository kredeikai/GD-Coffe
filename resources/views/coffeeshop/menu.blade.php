<!DOCTYPE html>
<html>
<head>
    <title>GD Coffee - Menu</title>
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

    <div class="menu-container">
        <h2 class="menu-title">Menu Kami</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="{{ asset('images/espresso.jpeg') }}" alt="Latte">
                <h3>Espresso</h3>
                <p>Kopi pekat dengan rasa kuat untuk memulai hari Anda.</p>
                <span class="price">Rp 20.000</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/cappucino.jpg') }}" alt="Latte">
                <h3>Cappuccino</h3>
                <p>Perpaduan sempurna espresso, susu, dan foam lembut.</p>
                <span class="price">Rp 25.000</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/latte.jpeg') }}" alt="Latte">
                <h3>Latte</h3>
                <p>Kopi lembut dengan sentuhan creamy yang menenangkan.</p>
                <span class="price">Rp 28.000</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/americano.png') }}" alt="Latte">
                <h3>Americano</h3>
                <p>Kopi hitam klasik dengan rasa ringan dan menyegarkan.</p>
                <span class="price">Rp 22.000</span>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 GD Coffee. All Rights Reserved.</p>
    </footer>
</body>
</html>

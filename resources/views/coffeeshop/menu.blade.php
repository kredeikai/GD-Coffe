@extends('layouts.layout')

@section('title', 'Menu')

@section('content') <div class="bg-gradient-to-r from-amber-800 to-amber-600 text-white text-center py-12 rounded-lg shadow-lg mb-10"> <h2 class="text-4xl font-bold mb-2 tracking-wide">Menu Kami</h2> <p class="text-lg opacity-90">Rasakan kenikmatan kopi dan minuman khas GD Coffe yang penuh cita rasa dan makna.</p> </div>

```
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

    <!-- Americano -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/americano.jpg') }}" alt="Americano" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Americano</h3>
            <p class="text-gray-600 mb-3 text-sm">Kopi hitam klasik dengan cita rasa kuat dan aroma khas.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 16.000</span>
        </div>
    </div>

    <!-- A-Milk -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/A-milk.jpg') }}" alt="A-Milk" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">A-Milk</h3>
            <p class="text-gray-600 mb-3 text-sm">Perpaduan lembut susu segar dengan espresso pilihan.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 16.000</span>
        </div>
    </div>

    <!-- Blue Sparkling -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/blue-sparkling.jpg') }}" alt="Blue Sparkling" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Blue Sparkling</h3>
            <p class="text-gray-600 mb-3 text-sm">Segar dan berkilau dengan sensasi rasa buah tropis.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 22.000</span>
        </div>
    </div>

    <!-- Cokelat -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/coklat.jpg') }}" alt="Cokelat" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Cokelat</h3>
            <p class="text-gray-600 mb-3 text-sm">Minuman cokelat premium untuk pecinta rasa manis klasik.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Gede Aren -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/gede-aren.jpg') }}" alt="Gede Aren" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Gede Aren</h3>
            <p class="text-gray-600 mb-3 text-sm">Manis alami dari gula aren berpadu dengan kopi khas GD.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Gede Caramel -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/gede-caramel.jpg') }}" alt="Gede Caramel" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Gede Caramel</h3>
            <p class="text-gray-600 mb-3 text-sm">Rasa manis gurih karamel yang bikin nagih.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Gede Hazelnut -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/gede-hazelnut.jpg') }}" alt="Gede Hazelnut" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Gede Hazelnut</h3>
            <p class="text-gray-600 mb-3 text-sm">Sentuhan kacang hazelnut yang wangi dan creamy.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Gede Vanilla -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/gede-vanila.jpg') }}" alt="Gede Vanilla" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Gede Vanilla</h3>
            <p class="text-gray-600 mb-3 text-sm">Perpaduan kopi dan vanilla yang lembut di lidah.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Lemon Tea -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/lemon-tea.jpg') }}" alt="Lemon Tea" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Lemon Tea</h3>
            <p class="text-gray-600 mb-3 text-sm">Kesegaran teh lemon yang pas buat semua suasana.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Mango Yakult -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/mango-yakult.jpg') }}" alt="Mango Yakult" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Mango Yakult</h3>
            <p class="text-gray-600 mb-3 text-sm">Kombinasi mangga segar dan yakult yang unik.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 22.000</span>
        </div>
    </div>

    <!-- Matcha -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/matcha.jpg') }}" alt="Matcha" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Matcha</h3>
            <p class="text-gray-600 mb-3 text-sm">Rasa autentik matcha Jepang, lembut dan menenangkan.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Orange Yakult -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/orange-yakult.jpg') }}" alt="Orange Yakult" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Orange Yakult</h3>
            <p class="text-gray-600 mb-3 text-sm">Paduan yakult dan jeruk yang menyegarkan.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 22.000</span>
        </div>
    </div>

    <!-- Red Velvet -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/red-velvet.jpg') }}" alt="Red Velvet" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Red Velvet</h3>
            <p class="text-gray-600 mb-3 text-sm">Manis, lembut, dan elegan dengan cita rasa khas red velvet.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

    <!-- Taro -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
        <img src="{{ asset('images/taro.jpg') }}" alt="Taro" class="w-full h-48 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-amber-800 mb-2">Taro</h3>
            <p class="text-gray-600 mb-3 text-sm">Minuman ungu lembut dengan rasa talas yang creamy.</p>
            <span class="text-lg font-bold text-amber-700 block">Rp 19.000</span>
        </div>
    </div>

</div>
```

@endsection

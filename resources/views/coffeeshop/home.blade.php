@extends('layouts.layout')

@section('title', 'Home')

@section('content')

    <div class="bg-gradient-to-r from-amber-800 to-amber-600 text-white text-center py-12 rounded-lg shadow-lg mb-10">
        <h2 class="text-4xl font-bold mb-2 tracking-wide">Selamat Datang di GD Coffee</h2>
        <p class="text-lg opacity-90">Kopi pilihan, suasana nyaman, dan momen terbaik bersama teman</p>
    </div>

    <div class="text-center mb-10">
        <a href="/menu" class="bg-amber-700 text-white px-6 py-2 rounded hover:bg-amber-600 transition">
            Lihat Menu
        </a>
    </div>

    <h2 class="text-2xl font-semibold text-center text-amber-800 mb-6">Rekomendasi Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/espresso.jpeg') }}" alt="Espresso" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Espresso</h3>
                <p class="text-gray-600">Kopi pekat dengan rasa kuat untuk memulai hari Anda.</p>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/cappucino.jpg') }}" alt="Cappuccino" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Cappuccino</h3>
                <p class="text-gray-600">Perpaduan sempurna espresso, susu, dan foam lembut.</p>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('images/latte.jpeg') }}" alt="Latte" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Latte</h3>
                <p class="text-gray-600">Kopi lembut dengan sentuhan creamy yang menenangkan.</p>
            </div>
        </div>
    </div>
    <br><br>
@endsection
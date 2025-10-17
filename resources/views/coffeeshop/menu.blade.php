@extends('layouts.layout')

@section('title', 'Menu')

@section('content')
    <div class="bg-gradient-to-r from-amber-800 to-amber-600 text-white text-center py-12 rounded-lg shadow-lg mb-10">
        <h2 class="text-4xl font-bold mb-2 tracking-wide">Menu Kami</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Menu Item 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ asset('images/espresso.jpeg') }}" alt="Espresso" class="w-full h-48 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-semibold text-amber-800 mb-2">Espresso</h3>
                <p class="text-gray-600 mb-3 text-sm">Kopi pekat dengan rasa kuat untuk memulai hari Anda.</p>
                <span class="text-lg font-bold text-amber-700 block">Rp 20.000</span>
            </div>
        </div>

        <!-- Menu Item 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ asset('images/cappucino.jpg') }}" alt="Cappuccino" class="w-full h-48 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-semibold text-amber-800 mb-2">Cappuccino</h3>
                <p class="text-gray-600 mb-3 text-sm">Perpaduan sempurna espresso, susu, dan foam lembut.</p>
                <span class="text-lg font-bold text-amber-700 block">Rp 25.000</span>
            </div>
        </div>

        <!-- Menu Item 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ asset('images/latte.jpeg') }}" alt="Latte" class="w-full h-48 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-semibold text-amber-800 mb-2">Latte</h3>
                <p class="text-gray-600 mb-3 text-sm">Kopi lembut dengan sentuhan creamy yang menenangkan.</p>
                <span class="text-lg font-bold text-amber-700 block">Rp 28.000</span>
            </div>
        </div>

        <!-- Menu Item 4 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ asset('images/americano.png') }}" alt="Americano" class="w-full h-48 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-semibold text-amber-800 mb-2">Americano</h3>
                <p class="text-gray-600 mb-3 text-sm">Kopi hitam klasik dengan rasa ringan dan menyegarkan.</p>
                <span class="text-lg font-bold text-amber-700 block">Rp 22.000</span>
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection
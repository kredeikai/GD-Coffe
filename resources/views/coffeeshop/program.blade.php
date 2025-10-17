@extends('layouts.layout')

@section('title', 'Program')

@section('content')

    <div class="bg-gradient-to-r from-amber-800 to-amber-600 text-white text-center py-12 rounded-lg shadow-lg mb-10">
        <h2 class="text-4xl font-bold mb-2 tracking-wide">Program Spesial GD Coffee</h2>
        <p class="text-lg opacity-90">Kopi pilihan, suasana nyaman, dan momen terbaik bersama teman</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/latte.jpeg') }}" alt="Workshop" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Workshop Latte Art</h3>
                <p class="text-gray-600">Belajar membuat seni latte langsung dari barista kami.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/espresso.jpeg') }}" alt="Diskon" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Promo Spesial</h3>
                <p class="text-gray-600">Nikmati diskon menarik setiap akhir pekan!</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/cappucino.jpg') }}" alt="Event" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Acara Komunitas</h3>
                <p class="text-gray-600">Gabung dalam acara kopi dan komunitas hangat kami.</p>
            </div>
        </div>
    </div>

    <br><br>
@endsection
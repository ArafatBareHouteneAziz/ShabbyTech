@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-500 to-indigo-600 py-20 text-white text-center">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Empowering Innovation in Software, AI, IoT & Training</h1>
    <p class="text-lg md:text-2xl mb-8">Professional solutions for your digital transformation journey.</p>
    <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-600 font-semibold px-8 py-3 rounded shadow hover:bg-gray-100 transition">Get in Touch</a>
</div>
<div class="container mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Software Development" class="mx-auto mb-4">
            <h3 class="font-bold text-xl mb-2">Software Development</h3>
            <p>Custom web, mobile, and desktop solutions tailored to your needs.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Machine Learning" class="mx-auto mb-4">
            <h3 class="font-bold text-xl mb-2">Machine Learning</h3>
            <p>AI-driven insights and automation for smarter business decisions.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="IoT Solutions" class="mx-auto mb-4">
            <h3 class="font-bold text-xl mb-2">IoT Solutions</h3>
            <p>Connect, monitor, and control devices for a smarter world.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Training Services" class="mx-auto mb-4">
            <h3 class="font-bold text-xl mb-2">Training Services</h3>
            <p>Workshops and courses to upskill your team in tech and AI.</p>
        </div>
    </div>
</div>
@endsection 
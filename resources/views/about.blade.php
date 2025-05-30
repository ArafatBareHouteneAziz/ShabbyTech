@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="https://via.placeholder.com/400" alt="YourName" class="rounded-lg shadow-lg w-full">
        </div>
        <div>
            <h1 class="text-4xl font-bold mb-4">About YourName</h1>
            <p class="mb-6 text-lg">I am a Computer Science Engineer passionate about building innovative solutions in software development, machine learning, and IoT. My mission is to empower businesses and individuals through technology and education. With years of experience delivering high-quality projects and training, I am committed to excellence and client success.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-indigo-600 text-white font-semibold px-8 py-3 rounded shadow hover:bg-indigo-700 transition">Contact Me</a>
        </div>
    </div>
</div>
@endsection 
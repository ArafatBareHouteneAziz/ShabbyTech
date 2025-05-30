@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16 px-6">
    <h1 class="text-4xl font-bold text-center mb-10">Portfolio</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <img src="https://via.placeholder.com/400" alt="E-commerce Platform" class="mb-4 rounded">
            <h2 class="font-bold text-xl mb-2">E-commerce Platform</h2>
            <p class="mb-4">A scalable online store with secure payments, inventory management, and analytics for growing businesses.</p>
            <a href="#" class="mt-auto inline-block bg-indigo-600 text-white font-semibold px-6 py-2 rounded hover:bg-indigo-700 transition">Learn More</a>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <img src="https://via.placeholder.com/400" alt="Predictive Maintenance System" class="mb-4 rounded">
            <h2 class="font-bold text-xl mb-2">Predictive Maintenance System</h2>
            <p class="mb-4">AI-powered solution for industrial IoT, predicting equipment failures and reducing downtime.</p>
            <a href="#" class="mt-auto inline-block bg-indigo-600 text-white font-semibold px-6 py-2 rounded hover:bg-indigo-700 transition">Learn More</a>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <img src="https://via.placeholder.com/400" alt="AI Training Program" class="mb-4 rounded">
            <h2 class="font-bold text-xl mb-2">AI Training Program</h2>
            <p class="mb-4">Comprehensive training for teams to master machine learning and AI technologies.</p>
            <a href="#" class="mt-auto inline-block bg-indigo-600 text-white font-semibold px-6 py-2 rounded hover:bg-indigo-700 transition">Learn More</a>
        </div>
    </div>
</div>
@endsection 
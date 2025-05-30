@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16 px-6">
    <h1 class="text-4xl font-bold text-center mb-10">Our Services</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Software Development" class="mx-auto mb-4">
            <h2 class="font-bold text-xl mb-2">Software Development</h2>
            <p>Custom web, mobile, and desktop solutions tailored to your business needs. From MVPs to enterprise systems, we deliver robust, scalable software.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Machine Learning" class="mx-auto mb-4">
            <h2 class="font-bold text-xl mb-2">Machine Learning</h2>
            <p>Unlock the power of data with AI-driven solutions: predictive analytics, automation, and intelligent systems for smarter decision-making.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="IoT Solutions" class="mx-auto mb-4">
            <h2 class="font-bold text-xl mb-2">IoT Solutions</h2>
            <p>Connect, monitor, and control devices with custom IoT solutions. Enable real-time data, automation, and remote management for your operations.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <img src="https://via.placeholder.com/80" alt="Training Services" class="mx-auto mb-4">
            <h2 class="font-bold text-xl mb-2">Training Services</h2>
            <p>Empower your team with hands-on workshops and courses in software development, AI, and IoT. Tailored training for all skill levels.</p>
        </div>
    </div>
</div>
@endsection 
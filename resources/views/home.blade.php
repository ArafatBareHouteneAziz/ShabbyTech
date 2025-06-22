@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-indigo-50 to-blue-50 py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 m-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-primary text-gray-900 mb-6">
                        Transforming Ideas into <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Digital Reality</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Expert software development, machine learning solutions, and IoT innovations to drive your business forward.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="bg-indigo-600 text-white px-8 py-3 rounded-full hover:bg-indigo-700 transition text-center">
                            Get Started
                        </a>
                        <a href="{{ route('services') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full border border-indigo-600 hover:bg-indigo-50 transition text-center">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Tech Solutions" class="rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Comprehensive technology solutions tailored to your business needs
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Software Development</h3>
                    <p class="text-gray-600">Custom software solutions built with modern technologies and best practices.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Machine Learning</h3>
                    <p class="text-gray-600">AI and ML solutions to automate processes and gain valuable insights.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">IoT Solutions</h3>
                    <p class="text-gray-600">Smart connected devices and IoT infrastructure for modern businesses.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Training Services</h3>
                    <p class="text-gray-600">Professional training programs to upskill your team in modern technologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We combine technical expertise with business acumen to deliver exceptional results
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Expert Team</h3>
                    <p class="text-gray-600">Our team consists of experienced professionals with deep technical knowledge.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Fast Delivery</h3>
                    <p class="text-gray-600">We deliver projects on time without compromising on quality.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Dedicated Support</h3>
                    <p class="text-gray-600">24/7 support and maintenance to ensure your systems run smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Ready to Transform Your Business?</h2>
            <p class="text-indigo-100 mb-8 max-w-2xl mx-auto">
                Let's discuss how we can help you achieve your business goals with our technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition inline-block">
                Get in Touch
            </a>
        </div>
    </section>
@endsection 
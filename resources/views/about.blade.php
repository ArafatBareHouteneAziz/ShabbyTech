@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-50 to-blue-50 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About ShabbyTech</h1>
                <p class="text-lg text-gray-600">
                    We're a team of passionate technologists dedicated to helping businesses thrive in the digital age through innovative solutions and expert guidance.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Our Mission" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                    <p class="text-gray-600 mb-8">
                        At ShabbyTech, we're committed to empowering businesses with cutting-edge technology solutions. Our mission is to bridge the gap between complex technology and practical business needs, making innovation accessible to all.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Deliver innovative solutions that drive business growth</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Make technology accessible and understandable</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Foster a culture of continuous learning and innovation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    These core values guide everything we do at ShabbyTech
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in everything we do, from code quality to customer service.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Collaboration</h3>
                    <p class="text-gray-600">We believe in the power of teamwork and building strong partnerships with our clients.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation</h3>
                    <p class="text-gray-600">We embrace new technologies and creative solutions to solve complex problems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Meet the talented individuals behind ShabbyTech's success
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600 mb-4">Founder & CEO</p>
                    <p class="text-gray-600">Visionary leader with 15+ years of experience in technology and business.</p>
                </div>
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-600 mb-4">CTO</p>
                    <p class="text-gray-600">Tech innovator specializing in AI and machine learning solutions.</p>
                </div>
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Team Member" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-2">Mike Johnson</h3>
                    <p class="text-gray-600 mb-4">Lead Developer</p>
                    <p class="text-gray-600">Full-stack developer with expertise in modern web technologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Join Our Journey</h2>
            <p class="text-indigo-100 mb-8 max-w-2xl mx-auto">
                Let's work together to transform your business with innovative technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition inline-block">
                Get in Touch
            </a>
        </div>
    </section>
@endsection 
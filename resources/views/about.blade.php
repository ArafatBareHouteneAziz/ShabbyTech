@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-12 md:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 md:mb-6">About ShabbyTech</h1>
            <p class="text-lg md:text-xl text-blue-100 max-w-3xl">We're a team of passionate technologists dedicated to helping businesses thrive in the digital age.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 md:mb-6">Our Mission</h2>
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                        At ShabbyTech, we're committed to empowering businesses with innovative technology solutions that drive growth and success. Our mission is to make cutting-edge technology accessible and beneficial for organizations of all sizes.
                    </p>
                    <div class="space-y-3 md:space-y-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-gray-600 text-sm md:text-base">Delivering innovative solutions that solve real business challenges</p>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-gray-600 text-sm md:text-base">Making technology accessible and beneficial for all organizations</p>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-gray-600 text-sm md:text-base">Fostering a culture of continuous learning and innovation</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Team Collaboration" class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="bg-gray-50 py-12 md:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Excellence</h3>
                    <p class="text-gray-600 text-sm md:text-base">We strive for excellence in everything we do, delivering high-quality solutions that exceed expectations.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Collaboration</h3>
                    <p class="text-gray-600 text-sm md:text-base">We believe in the power of collaboration, working closely with our clients to achieve shared goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Innovation</h3>
                    <p class="text-gray-600 text-sm md:text-base">We embrace innovation, constantly exploring new technologies and approaches to solve complex problems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($teamMembers as $member)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-48 md:h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">{{ $member->name }}</h3>
                        <p class="text-blue-600 mb-3 md:mb-4 text-sm md:text-base">{{ $member->position }}</p>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $member->bio }}</p>
                        <div class="flex space-x-4">
                            @if($member->email)
                            <a href="mailto:{{ $member->email }}" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </a>
                            @endif
                            @if($member->linkedin_url)
                            <a href="{{ $member->linkedin_url }}" target="_blank" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.779 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"></path>
                                </svg>
                            </a>
                            @endif
                            @if($member->github_url)
                            <a href="{{ $member->github_url }}" target="_blank" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 py-12 md:py-16">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 md:mb-6">Join Our Journey</h2>
            <p class="text-lg md:text-xl text-blue-100 mb-6 md:mb-8">Let's work together to create innovative solutions for your business.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 px-6 md:px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300 text-sm md:text-base">Get in Touch</a>
        </div>
    </section>
@endsection 
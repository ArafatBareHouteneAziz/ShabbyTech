@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-50 to-blue-50 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Services</h1>
                <p class="text-lg text-gray-600">
                    Comprehensive technology solutions designed to drive your business forward. From custom software development to cutting-edge AI solutions, we've got you covered.
                </p>
            </div>
        </div>
    </section>

    <!-- Software Development Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Software Development" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Software Development</h2>
                    <p class="text-gray-600 mb-8">
                        We build custom software solutions that are tailored to your specific business needs. Our development process ensures high-quality, scalable, and maintainable applications.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Custom web applications</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Mobile app development</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">API development and integration</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Machine Learning Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Machine Learning" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Machine Learning</h2>
                    <p class="text-gray-600 mb-8">
                        Harness the power of artificial intelligence and machine learning to automate processes, gain insights, and make data-driven decisions.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Predictive analytics</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Natural language processing</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Computer vision solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IoT Solutions Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="IoT Solutions" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">IoT Solutions</h2>
                    <p class="text-gray-600 mb-8">
                        Connect and control your devices with our comprehensive IoT solutions. We help you build smart, connected systems that improve efficiency and enable new capabilities.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Smart home automation</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Industrial IoT monitoring</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">IoT security solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Training Services" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Training Services</h2>
                    <p class="text-gray-600 mb-8">
                        Empower your team with the skills they need to succeed in the digital age. Our comprehensive training programs cover the latest technologies and best practices.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">Web development bootcamps</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">AI and ML workshops</p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-600">IoT development training</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Ready to Get Started?</h2>
            <p class="text-indigo-100 mb-8 max-w-2xl mx-auto">
                Let's discuss how our services can help you achieve your business goals.
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition inline-block">
                Contact Us
            </a>
        </div>
    </section>
@endsection 
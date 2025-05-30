@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-50 to-blue-50 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Portfolio</h1>
                <p class="text-lg text-gray-600">
                    Explore our successful projects and see how we've helped businesses transform through technology.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80" alt="E-commerce Platform" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4">A modern e-commerce platform with advanced features and seamless user experience.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Vue.js</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Tailwind CSS</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="AI Analytics Dashboard" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">AI Analytics Dashboard</h3>
                        <p class="text-gray-600 mb-4">Real-time analytics platform powered by machine learning algorithms.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Python</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">TensorFlow</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">React</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Smart Home System" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Smart Home System</h3>
                        <p class="text-gray-600 mb-4">IoT-based home automation system with voice control and energy optimization.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">IoT</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Node.js</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Mobile Banking App" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Mobile Banking App</h3>
                        <p class="text-gray-600 mb-4">Secure and user-friendly mobile banking application with biometric authentication.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Flutter</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Firebase</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Node.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Supply Chain Management" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Supply Chain Management</h3>
                        <p class="text-gray-600 mb-4">End-to-end supply chain management system with real-time tracking and analytics.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Java</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Spring Boot</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Healthcare Platform" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Healthcare Platform</h3>
                        <p class="text-gray-600 mb-4">Comprehensive healthcare management system with telemedicine capabilities.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">Django</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">React</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm">AWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Client Testimonials</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Hear what our clients have to say about working with us
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">John Smith</h4>
                            <p class="text-gray-600">CEO, TechCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"ShabbyTech delivered an exceptional e-commerce platform that has transformed our online business. Their team's expertise and professionalism were outstanding."</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-600">CTO, DataFlow</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The AI analytics dashboard developed by ShabbyTech has given us unprecedented insights into our business operations. Their technical expertise is unmatched."</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Michael Brown</h4>
                            <p class="text-gray-600">Director, SmartHome Inc.</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The smart home system implemented by ShabbyTech has revolutionized our product offerings. Their attention to detail and commitment to quality is impressive."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Ready to Start Your Project?</h2>
            <p class="text-indigo-100 mb-8 max-w-2xl mx-auto">
                Let's discuss how we can help you achieve your business goals with our technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition inline-block">
                Get in Touch
            </a>
        </div>
    </section>
@endsection 
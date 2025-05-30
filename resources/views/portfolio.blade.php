@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Portfolio</h1>
            <p class="text-xl text-blue-100 max-w-3xl">Explore our successful projects and see how we've helped businesses transform their ideas into reality.</p>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $portfolio->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $portfolio->description }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(json_decode($portfolio->technologies) as $technology)
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">{{ $technology }}</span>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $portfolio->client }}</span>
                            <a href="{{ $portfolio->project_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">View Project →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/' . $testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">{{ $testimonial->client_name }}</h4>
                            <p class="text-gray-600">{{ $testimonial->client_position }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $testimonial->testimonial }}</p>
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl text-blue-100 mb-8">Let's discuss how we can help you achieve your business goals.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">Get in Touch</a>
        </div>
    </div>
@endsection 
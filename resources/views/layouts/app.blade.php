<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ShabbyTech') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <nav class="fixed top-0 left-0 w-full bg-white shadow z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="/" class="text-2xl font-bold text-indigo-600">YourName</a>
            <ul class="flex space-x-6">
                <li><a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-indigo-600">Services</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-indigo-600">About</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-indigo-600">Portfolio</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-indigo-600">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main class="pt-24 min-h-screen">
        @yield('content')
    </main>
    <footer class="bg-white border-t mt-12 py-6">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <div class="text-gray-500">&copy; {{ date('Y') }} YourName. All rights reserved.</div>
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-indigo-600">LinkedIn</a>
                <a href="#" class="hover:text-indigo-600">GitHub</a>
                <a href="mailto:hello@example.com" class="hover:text-indigo-600">Email</a>
            </div>
        </div>
    </footer>
</body>
</html> 
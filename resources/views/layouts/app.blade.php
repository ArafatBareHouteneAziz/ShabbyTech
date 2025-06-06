<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ShabbyTech') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900 font-sans">
    <nav class="fixed top-0 left-0 w-full bg-primary backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="/" class="text-2xl font-bold text-white">ShabbyTech</a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white/80 hover:text-white transition">{{ __('messages.home') }}</a>
                <a href="{{ route('services') }}" class="text-white/80 hover:text-white transition">{{ __('messages.services') }}</a>
                <a href="{{ route('about') }}" class="text-white/80 hover:text-white transition">{{ __('messages.about') }}</a>
                <a href="{{ route('portfolio') }}" class="text-white/80 hover:text-white transition">{{ __('messages.portfolio') }}</a>
                <a href="{{ route('contact') }}" class="bg-secondary text-white px-6 py-2 rounded-full hover:bg-secondary/90 transition">{{ __('messages.contact') }}</a>
                
                <!-- Language Switcher -->
                <div class="relative group">
                    <button class="text-white/80 hover:text-white transition flex items-center space-x-1 bg-primary-dark px-3 py-1 rounded-lg">
                        <span>{{ strtoupper(app()->getLocale()) }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
                        <a href="{{ route('language.switch', 'en') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition {{ app()->getLocale() == 'en' ? 'bg-gray-100' : '' }}">
                            <span class="flex items-center">
                                <span class="mr-2">🇬🇧</span>
                                English
                            </span>
                        </a>
                        <a href="{{ route('language.switch', 'fr') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition {{ app()->getLocale() == 'fr' ? 'bg-gray-100' : '' }}">
                            <span class="flex items-center">
                                <span class="mr-2">🇫🇷</span>
                                Français
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <button class="md:hidden text-white hover:text-white/80">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-tertiary text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-4">ShabbyTech</h3>
                    <p class="text-white/70">{{ __('messages.footer_description') }}</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">{{ __('messages.services') }}</h4>
                    <ul class="space-y-2 text-white/70">
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">{{ __('messages.software_development') }}</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">{{ __('messages.machine_learning') }}</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">{{ __('messages.iot_solutions') }}</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">{{ __('messages.training_services') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">{{ __('messages.quick_links') }}</h4>
                    <ul class="space-y-2 text-white/70">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">{{ __('messages.about') }}</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-white transition">{{ __('messages.portfolio') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">{{ __('messages.connect') }}</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/in/houtene-aziz-arafat-bare/" class="text-white/70 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/arafatbarehouteneaziz" class="text-white/70 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="mailto:hello@arafatbareaziz.com" class="text-white/70 hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/688849810" class="text-white/70 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/10 mt-12 pt-8 text-center text-white/70">
                <p>&copy; {{ date('Y') }} ShabbyTech. {{ __('messages.all_rights_reserved') }}</p>
            </div>
        </div>
    </footer>
</body>
</html> 
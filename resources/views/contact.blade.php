@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16 px-6 max-w-lg">
    <h1 class="text-4xl font-bold text-center mb-8">Contact</h1>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white rounded-lg shadow p-8 space-y-6">
        @csrf
        <div>
            <label for="name" class="block font-semibold mb-1">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            @error('name')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email" class="block font-semibold mb-1">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            @error('email')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message" class="block font-semibold mb-1">Message</label>
            <textarea name="message" id="message" rows="5" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>{{ old('message') }}</textarea>
            @error('message')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white font-semibold px-6 py-3 rounded hover:bg-indigo-700 transition">Send Message</button>
    </form>
</div>
@endsection 
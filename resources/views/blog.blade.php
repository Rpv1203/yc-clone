@extends('layouts.public')

@section('title', 'Blog')

@section('content')

<!-- Header Section -->
<section class="bg-yc-green-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">YC Blog</h1>
        <p class="text-xl text-green-50">Insights, stories, and advice from the startup world</p>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                        <!-- Featured Image -->
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gradient-to-r from-yc-green-500 to-yc-green-700"></div>
                        @endif
                        
                        <div class="p-6">
                            <!-- Title -->
                            <h2 class="text-2xl font-bold text-gray-800 mb-3 hover:text-yc-green-600 transition">
                                {{ $post->title }}
                            </h2>
                            
                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->excerpt, 150) }}</p>
                            
                            <!-- Meta Info -->
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <span class="font-semibold text-yc-green-600">{{ $post->author }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</span>
                            </div>
                            
                            <!-- Read More -->
                            <a href="#" class="text-yc-green-600 hover:text-yc-green-700 font-semibold inline-flex items-center">
                                Read More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-yc-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-yc-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">No Blog Posts Yet</h2>
                <p class="text-gray-600 mb-6">Blog posts will appear here once they're published.</p>
                @auth
                    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                        <a href="/dashboard" class="bg-yc-green-500 text-white px-6 py-3 rounded-lg hover:bg-yc-green-600 inline-block font-semibold">
                            Write First Post
                        </a>
                    @endif
                @endauth
            </div>
        @endif
        
    </div>
</section>

@endsection
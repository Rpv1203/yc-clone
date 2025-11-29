@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('header', 'Dashboard Overview')

@section('content')

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Companies Card -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-yc-green-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Total Companies</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\Company::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-yc-green-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-yc-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
        </div>
        <a href="{{ route('admin.companies.index') }}" class="text-yc-green-600 text-sm font-medium mt-4 inline-block hover:text-yc-green-700">
            Manage Companies →
        </a>
    </div>
    
    <!-- Blog Posts Card -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-blue-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Blog Posts</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\BlogPost::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        </div>
        <a href="{{ route('admin.blog-posts.index') }}" class="text-blue-600 text-sm font-medium mt-4 inline-block hover:text-blue-700">
            Manage Posts →
        </a>
    </div>
    
    <!-- Published Posts -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-purple-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Published</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\BlogPost::where('is_published', true)->count() }}</p>
            </div>
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
    </div>
    
    <!-- Active Companies -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-orange-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Active Companies</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\Company::where('is_active', true)->count() }}</p>
            </div>
            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
        </div>
    </div>
    
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Recent Companies -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-800">Recent Companies</h3>
            <a href="{{ route('admin.companies.create') }}" class="text-yc-green-600 hover:text-yc-green-700 font-medium text-sm">
                + Add New
            </a>
        </div>
        
        @php
            $recentCompanies = \App\Models\Company::orderBy('created_at', 'desc')->take(5)->get();
        @endphp
        
        @if($recentCompanies->count() > 0)
            <div class="space-y-3">
                @foreach($recentCompanies as $company)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yc-green-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-yc-green-600 font-bold">{{ substr($company->name, 0, 1) }}</span>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">{{ $company->name }}</p>
                                <p class="text-xs text-gray-500">{{ $company->batch ?? 'No batch' }}</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.companies.edit', $company) }}" class="text-yc-green-600 hover:text-yc-green-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">No companies yet</p>
        @endif
    </div>
    
    <!-- Recent Blog Posts -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-800">Recent Blog Posts</h3>
            <a href="{{ route('admin.blog-posts.create') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                + Add New
            </a>
        </div>
        
        @php
            $recentPosts = \App\Models\BlogPost::orderBy('created_at', 'desc')->take(5)->get();
        @endphp
        
        @if($recentPosts->count() > 0)
            <div class="space-y-3">
                @foreach($recentPosts as $post)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">{{ Str::limit($post->title, 40) }}</p>
                            <p class="text-xs text-gray-500">
                                {{ $post->author }} • 
                                @if($post->is_published)
                                    <span class="text-green-600">Published</span>
                                @else
                                    <span class="text-orange-600">Draft</span>
                                @endif
                            </p>
                        </div>
                        <a href="{{ route('admin.blog-posts.edit', $post) }}" class="text-blue-600 hover:text-blue-700 ml-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">No blog posts yet</p>
        @endif
    </div>
    
</div>

@endsection
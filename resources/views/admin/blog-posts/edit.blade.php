@extends('layouts.admin')

@section('title', 'Edit Blog Post')
@section('header', 'Edit Blog Post')

@section('content')

<div class="max-w-4xl">
    <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
        @csrf
        @method('PUT')
        
        <!-- Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                Post Title *
            </label>
            <input type="text" 
                   id="title" 
                   name="title" 
                   value="{{ old('title', $blogPost->title) }}"
                   required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Author -->
        <div class="mb-6">
            <label for="author" class="block text-sm font-semibold text-gray-700 mb-2">
                Author Name *
            </label>
            <input type="text" 
                   id="author" 
                   name="author" 
                   value="{{ old('author', $blogPost->author) }}"
                   required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('author') border-red-500 @enderror">
            @error('author')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Excerpt -->
        <div class="mb-6">
            <label for="excerpt" class="block text-sm font-semibold text-gray-700 mb-2">
                Excerpt (Short Summary) *
            </label>
            <textarea id="excerpt" 
                      name="excerpt" 
                      rows="3" 
                      required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
            @error('excerpt')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Content -->
        <div class="mb-6">
            <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                Full Content *
            </label>
            <textarea id="content" 
                      name="content" 
                      rows="12" 
                      required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content', $blogPost->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Is Published -->
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" 
                       name="is_published" 
                       value="1"
                       {{ old('is_published', $blogPost->is_published) ? 'checked' : '' }}
                       class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <span class="ml-2 text-sm font-medium text-gray-700">Publish this post (make it visible on the website)</span>
            </label>
        </div>
        
        <!-- Buttons -->
        <div class="flex gap-4">
            <button type="submit" 
            class="bg-yc-green-500 text-white px-6 py-3 rounded-lg hover:bg-yc-green-600 font-semibold">
            Update Post
        </button>
            <a href="{{ route('admin.blog-posts.index') }}" 
               class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 font-semibold">
                Cancel
            </a>
        </div>
    </form>
</div>

@endsection
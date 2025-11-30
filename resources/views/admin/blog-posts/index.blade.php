@extends('layouts.admin')

@section('title', 'Manage Blog Posts')
@section('header', 'Blog Posts')

@section('content')

<div class="mb-6 flex justify-between items-center">
    <p class="text-gray-600">Manage all blog posts</p>
    <a href="{{ route('admin.blog-posts.create') }}" 
     class="bg-yc-green-500 text-white px-6 py-3 rounded-lg hover:bg-yc-green-600 font-semibold inline-flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
        </svg>
        New Post
    </a>
</div>

@if($posts->count() > 0)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($posts as $post)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $post->title }}</div>
                            <div class="text-sm text-gray-500">{{ Str::limit($post->excerpt, 60) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $post->author }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($post->is_published)
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Published
                                </span>
                            @else
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                           {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('M d, Y') : '-' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.blog-posts.edit', $post) }}" 
                               class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                            
                            @if(auth()->user()->role === 'admin')
                            <form action="{{ route('admin.blog-posts.destroy', $post) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="bg-white rounded-lg shadow-md p-12 text-center">
        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
        </svg>
        <h3 class="text-lg font-medium text-gray-900 mb-2">No blog posts yet</h3>
        <p class="text-gray-500 mb-6">Get started by creating your first blog post</p>
        <a href="{{ route('admin.blog-posts.create') }}" 
           class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 font-semibold inline-block">
            Write First Post
        </a>
    </div>
@endif

@endsection
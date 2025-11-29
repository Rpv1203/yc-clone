@extends('layouts.admin')

@section('title', 'Edit Company')
@section('header', 'Edit Company')

@section('content')

<div class="max-w-3xl">
    <form action="{{ route('admin.companies.update', $company) }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
        @csrf
        @method('PUT')
        
        <!-- Company Name -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                Company Name *
            </label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   value="{{ old('name', $company->name) }}"
                   required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Description -->
        <div class="mb-6">
            <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                Description *
            </label>
            <textarea id="description" 
                      name="description" 
                      rows="4" 
                      required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description', $company->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Website -->
        <div class="mb-6">
            <label for="website" class="block text-sm font-semibold text-gray-700 mb-2">
                Website URL
            </label>
            <input type="url" 
                   id="website" 
                   name="website" 
                   value="{{ old('website', $company->website) }}"
                   placeholder="https://example.com"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent @error('website') border-red-500 @enderror">
            @error('website')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Batch -->
        <div class="mb-6">
            <label for="batch" class="block text-sm font-semibold text-gray-700 mb-2">
                Batch (e.g., W21, S22)
            </label>
            <input type="text" 
                   id="batch" 
                   name="batch" 
                   value="{{ old('batch', $company->batch) }}"
                   placeholder="W26"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent @error('batch') border-red-500 @enderror">
            @error('batch')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Is Active -->
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" 
                       name="is_active" 
                       value="1"
                       {{ old('is_active', $company->is_active) ? 'checked' : '' }}
                       class="w-5 h-5 text-yc-green-600 border-gray-300 rounded focus:ring-yc-green-500">
                <span class="ml-2 text-sm font-medium text-gray-700">Company is active (visible on website)</span>
            </label>
        </div>
        
        <!-- Buttons -->
        <div class="flex gap-4">
            <button type="submit" 
                    class="bg-yc-green-500 text-white px-6 py-3 rounded-lg hover:bg-yc-green-600 font-semibold">
                Update Company
            </button>
            <a href="{{ route('admin.companies.index') }}" 
               class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 font-semibold">
                Cancel
            </a>
        </div>
    </form>
</div>

@endsection
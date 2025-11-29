@extends('layouts.public')

@section('title', 'Companies')

@section('content')

<!-- Header Section -->
<section class="bg-yc-green-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">YC Companies</h1>
        <p class="text-xl text-green-50">Over 5,000 companies funded since 2005</p>
    </div>
</section>

<!-- Companies Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($companies->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($companies as $company)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition p-6 border-t-4 border-yc-green-500">
                        <!-- Company Logo -->
                        <div class="flex items-center mb-4">
                            @if($company->logo)
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" class="w-16 h-16 rounded-full">
                            @else
                                <div class="w-16 h-16 bg-yc-green-100 rounded-full flex items-center justify-center">
                                    <span class="text-yc-green-600 font-bold text-2xl">{{ substr($company->name, 0, 1) }}</span>
                                </div>
                            @endif
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-800">{{ $company->name }}</h3>
                                @if($company->batch)
                                    <span class="text-sm text-gray-500">{{ $company->batch }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-gray-600 mb-4">{{ Str::limit($company->description, 120) }}</p>
                        
                        <!-- Website Link -->
                        @if($company->website)
                            <a href="{{ $company->website }}" target="_blank" class="text-yc-green-600 hover:text-yc-green-700 font-semibold inline-flex items-center">
                                Visit Website
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-yc-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-yc-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">No Companies Yet</h2>
                <p class="text-gray-600 mb-6">Companies will appear here once they're added to the system.</p>
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="/admin/companies/create" class="bg-yc-green-500 text-white px-6 py-3 rounded-lg hover:bg-yc-green-600 inline-block font-semibold">
                            Add First Company
                        </a>
                    @endif
                @endauth
            </div>
        @endif
        
    </div>
</section>

@endsection
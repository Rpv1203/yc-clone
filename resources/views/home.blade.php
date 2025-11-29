@extends('layouts.public')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-yc-green-500 to-yc-green-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Make something people want</h1>
        <p class="text-xl md:text-2xl mb-8 text-green-50">Join the world's most powerful startup accelerator</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/apply" class="bg-white text-yc-green-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition inline-block">
                Apply for Winter 2026
            </a>
            <a href="/companies" class="bg-yc-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yc-green-700 transition inline-block border-2 border-white">
                View Companies
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-yc-green-600">5,000+</div>
                <div class="text-gray-600 mt-2">Companies Funded</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-yc-green-600">$600B+</div>
                <div class="text-gray-600 mt-2">Combined Valuation</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-yc-green-600">100+</div>
                <div class="text-gray-600 mt-2">Unicorns Created</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-yc-green-600">50+</div>
                <div class="text-gray-600 mt-2">Countries Represented</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Companies Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Companies</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Company placeholders -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="w-16 h-16 bg-yc-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-yc-green-600 font-bold text-xl">A</span>
                </div>
                <h3 class="font-semibold text-gray-800">Airbnb</h3>
                <p class="text-sm text-gray-500">W09</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="w-16 h-16 bg-yc-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-yc-green-600 font-bold text-xl">D</span>
                </div>
                <h3 class="font-semibold text-gray-800">Dropbox</h3>
                <p class="text-sm text-gray-500">S07</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="w-16 h-16 bg-yc-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-yc-green-600 font-bold text-xl">S</span>
                </div>
                <h3 class="font-semibold text-gray-800">Stripe</h3>
                <p class="text-sm text-gray-500">S09</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="w-16 h-16 bg-yc-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-yc-green-600 font-bold text-xl">C</span>
                </div>
                <h3 class="font-semibold text-gray-800">Coinbase</h3>
                <p class="text-sm text-gray-500">S12</p>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="/companies" class="text-yc-green-600 font-semibold hover:text-yc-green-700 transition">
                View All Companies →
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-yc-green-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to build the future?</h2>
        <p class="text-xl mb-8 text-green-50">Applications are open for Winter 2026 batch</p>
        <a href="/apply" class="bg-white text-yc-green-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition inline-block">
            Apply Now
        </a>
    </div>
</section>

@endsection
@extends('layouts.public')

@section('title', 'Apply')

@section('content')

<!-- Header Section -->
<section class="bg-gradient-to-r from-yc-green-500 to-yc-green-700 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Apply to YC</h1>
        <p class="text-xl text-green-50">Join the world's most powerful startup accelerator</p>
    </div>
</section>

<!-- Application Info -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-yc-green-50 border-l-4 border-yc-green-500 p-6 mb-8">
            <h3 class="text-lg font-semibold text-yc-green-700 mb-2">Winter 2026 Batch</h3>
            <p class="text-gray-700">Applications are currently open. Deadline: October 1, 2025</p>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Application Form</h2>
            
            <form action="#" method="POST" class="space-y-6">
                @csrf
                
                <!-- Company Name -->
                <div>
                    <label for="company_name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Company Name *
                    </label>
                    <input type="text" id="company_name" name="company_name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent">
                </div>
                
                <!-- Founder Name -->
                <div>
                    <label for="founder_name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Your Name *
                    </label>
                    <input type="text" id="founder_name" name="founder_name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent">
                </div>
                
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email Address *
                    </label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent">
                </div>
                
                <!-- Website -->
                <div>
                    <label for="website" class="block text-sm font-semibold text-gray-700 mb-2">
                        Company Website
                    </label>
                    <input type="url" id="website" name="website"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent"
                           placeholder="https://example.com">
                </div>
                
                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                        What does your company do? *
                    </label>
                    <textarea id="description" name="description" rows="4" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent"
                              placeholder="Describe your company in one or two sentences..."></textarea>
                </div>
                
                <!-- Why YC -->
                <div>
                    <label for="why_yc" class="block text-sm font-semibold text-gray-700 mb-2">
                        Why do you want to join YC? *
                    </label>
                    <textarea id="why_yc" name="why_yc" rows="4" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yc-green-500 focus:border-transparent"></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-yc-green-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yc-green-600 transition">
                        Submit Application
                    </button>
                </div>
                
                <p class="text-sm text-gray-500 text-center">
                    * Required fields
                </p>
            </form>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">When do batches start?</h3>
                <p class="text-gray-600">We run two batches per year: Winter (starting in January) and Summer (starting in June).</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">How much funding do you provide?</h3>
                <p class="text-gray-600">YC invests $500k in each company on standard terms.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Do I need a working product?</h3>
                <p class="text-gray-600">No, many successful YC companies were just ideas when they applied.</p>
            </div>
        </div>
    </div>
</section>

@endsection
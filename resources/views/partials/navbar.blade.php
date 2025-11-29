<nav class="bg-white shadow-lg border-b-4 border-yc-green-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <span class="text-3xl font-bold text-yc-green-600">YC</span>
                    <span class="ml-2 text-gray-700 font-medium hidden sm:block">Clone</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-yc-green-600 font-medium transition">Home</a>
                <a href="/companies" class="text-gray-700 hover:text-yc-green-600 font-medium transition">Companies</a>
                <a href="/blog" class="text-gray-700 hover:text-yc-green-600 font-medium transition">Blog</a>
                <a href="/apply" class="bg-yc-green-500 text-white px-6 py-2 rounded-lg hover:bg-yc-green-600 font-semibold transition">
                    Apply
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-yc-green-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200">
        <div class="px-4 py-3 space-y-3">
            <a href="/" class="block text-gray-700 hover:text-yc-green-600 font-medium">Home</a>
            <a href="/companies" class="block text-gray-700 hover:text-yc-green-600 font-medium">Companies</a>
            <a href="/blog" class="block text-gray-700 hover:text-yc-green-600 font-medium">Blog</a>
            <a href="/apply" class="block bg-yc-green-500 text-white px-4 py-2 rounded-lg hover:bg-yc-green-600 font-semibold text-center">
                Apply
            </a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
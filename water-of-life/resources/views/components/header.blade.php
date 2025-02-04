<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div x-data="{ isOpen: false }">
    <!-- Regular header with logo -->
    <header class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-x-hidden">
            <!-- Logo Section -->
            <div class="flex flex-col items-center py-4 overflow-x-hidden">
                <div class="mb-6 w-full relative overflow-x-hidden">
                    <div class="flex justify-center overflow-x-hidden">
                        <a href="/index" class="text-xl font-bold text-gray-800">
                            <img class="object-contain w-40 h-40" src="{{ asset('images/logo.avif') }}" alt="Water of Life">
                        </a>
                    </div>
                    
                    <!-- Burger Menu Button -->
                    <button 
                        @click="isOpen = !isOpen; console.log('Menu clicked:', isOpen)" 
                        class="absolute right-0 top-1/2 -translate-y-1/2 block menu:hidden focus:outline-none"
                        aria-label="Toggle menu">
                        <svg class="h-8 w-8 text-gray-600 hover:text-[#36C9C9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Sticky Navigation -->
    <div class="sticky top-0 bg-white shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Navigation Section -->
            <nav class="hidden menu:flex space-x-8 nav:space-x-12 justify-center py-4">
                <div class="relative group">
                    <button class="text-base nav:text-lg font-medium {{ request()->routeIs('wol-family*') || request()->routeIs('girls-house*') || request()->routeIs('boys-house*') || request()->routeIs('coh*') || request()->routeIs('ccpp*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] inline-flex items-center uppercase">
                        <a href="/wol-family">WOL Family</a>
                        <svg class="ml-2 h-4 nav:h-5 w-4 nav:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 nav:w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-in-out hover:opacity-100 hover:visible">
                        <div class="py-2" role="menu">
                            <a href="/girls-house" class="block px-4 nav:px-6 py-2 nav:py-3 text-sm nav:text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Girls House</a>
                            <a href="/boys-house" class="block px-4 nav:px-6 py-2 nav:py-3 text-sm nav:text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Boys House</a>
                            <a href="/coh" class="block px-4 nav:px-6 py-2 nav:py-3 text-sm nav:text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Children Of Hope</a>
                            <a href="/ccpp" class="block px-4 nav:px-6 py-2 nav:py-3 text-sm nav:text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Calvary chapel Phnom Penh</a>

                        </div>
                    </div>
                </div>
                <a href="/about" class="text-base nav:text-lg font-medium {{ request()->routeIs('about*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">About Cambodia</a>

                <a href="/ministries" class="text-base nav:text-lg font-medium {{ request()->routeIs('ministries*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">Ministries</a>
                <a href="/who-we-are" class="text-base nav:text-lg font-medium {{ request()->routeIs('who-we-are*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">Who We Are</a>

                <a href="/contact" class="text-base nav:text-lg font-medium {{ request()->routeIs('contact*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">Contact Us</a>
                
                <div class="relative group">
                    <button class="text-base nav:text-lg font-medium {{ request()->routeIs('help*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] inline-flex items-center uppercase">
                       <a href="/how-to-help">How to help</a>
                        <svg class="ml-2 h-4 nav:h-5 w-4 nav:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">

                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-in-out hover:opacity-100 hover:visible">
                        <div class="py-2" role="menu">
                            <a href="/help/donate" class="block px-6 py-3 text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Donate</a>
                            <a href="/help/volunteer" class="block px-6 py-3 text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Prayer Request</a>
                            <a href="/help/partner" class="block px-6 py-3 text-base font-medium text-gray-700 hover:text-[#36C9C9] uppercase" role="menuitem">Need List</a>


                        </div>
                    </div>
                </div>
            </nav>

            <!-- Mobile Navigation -->
            <div 
                x-show="isOpen" 
                x-cloak
                class="menu:hidden w-full overflow-x-hidden"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
            >
                <div class="pt-4 pb-4 space-y-3">
                    <a href="/about" class="block px-6 py-4 text-lg font-medium {{ request()->is('about*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">About Cambodia</a>
                    
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium {{ request()->is('wol-family*') || request()->is('girls-house*') || request()->is('boys-house*') || request()->is('coh*') || request()->is('ccpp*') ? 'text-[#36C9C9]' : 'text-gray-600' }} hover:text-[#36C9C9] uppercase">
                            <a href="/wol-family">WOL Family</a>
                            <svg class="h-6 w-6" :class="{ 'transform rotate-180': dropdownOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">

                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" class="pl-6 w-full">
                            <a href="/girls-house" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Girls House</a>
                            <a href="/boys-house" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Boys House</a>
                            <a href="/coh" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Children Of Hope</a>
                            <a href="/ccpp" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Calvary chapel Phnom Penh</a>

                        </div>
                    </div>
                    <a href="/ministries" class="block px-6 py-4 text-lg font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Ministries</a>
                    <a href="/who-we-are" class="block px-6 py-4 text-lg font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Who We Are</a>

                    <a href="/contact" class="block px-6 py-4 text-lg font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Contact Us</a>

                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-gray-600 hover:text-[#36C9C9] uppercase">
                            <a href="/how-to-help">How to help</a>
                            <svg class="h-6 w-6" :class="{ 'transform rotate-180': dropdownOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">

                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" class="pl-6 w-full">
                            <a href="/help/donate" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Donate</a>
                            <a href="/help/volunteer" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Prayer Request</a>
                            <a href="/help/partner" class="block px-6 py-3 text-base font-medium text-gray-600 hover:text-[#36C9C9] uppercase">Need List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
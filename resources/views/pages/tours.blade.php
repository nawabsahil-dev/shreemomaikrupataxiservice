@extends('layouts.app')

@section('title', 'Premium Tour Packages - Explore Gujarat - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Discover the best tour packages in Gujarat. Spiritual tours, adventure trips, wildlife safaris, and weekend getaways. Expert guides, comfortable vehicles, best prices.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/tours.css') }}">
@endsection

@section('content')

<!-- Hero Section with Parallax Effect and Video Background -->
<div class="relative overflow-hidden bg-gradient-to-br from-[#0a1f31] via-[#1a3a52] to-[#0a1f31] text-white py-12 sm:py-20 md:py-32 lg:py-40" id="heroSection">
    <!-- Animated Background Pattern with Enhanced Overlay -->
    <div class="absolute inset-0 opacity-[0.03]">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;80&quot; height=&quot;80&quot; viewBox=&quot;0 0 80 80&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10s-10-4.477-10-10 4.477-10 10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10S0 25.523 0 20s4.477-10 10-10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z&quot; /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- Enhanced Decorative Gradient Orbs with More Animations -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -left-20 sm:-top-32 sm:-left-32 w-[300px] sm:w-[600px] h-[300px] sm:h-[600px] bg-gradient-to-br from-yellow-400/25 to-orange-500/15 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-1/3 -right-20 sm:-right-40 w-[350px] sm:w-[700px] h-[350px] sm:h-[700px] bg-gradient-to-bl from-blue-400/20 to-cyan-500/10 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute -bottom-20 sm:-bottom-32 left-1/4 w-[250px] sm:w-[500px] h-[250px] sm:h-[500px] bg-gradient-to-tr from-yellow-300/25 to-amber-500/15 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute top-1/2 right-1/4 w-48 sm:w-96 h-48 sm:h-96 bg-gradient-to-r from-purple-400/15 to-pink-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    </div>

    <!-- Enhanced Floating Sparkle Elements -->
    <div class="absolute top-10 left-[5%] sm:top-20 sm:left-[10%] w-2 sm:w-3 h-2 sm:h-3 bg-yellow-400 rounded-full animate-pulse shadow-lg shadow-yellow-400/50"></div>
    <div class="absolute top-24 right-[10%] sm:top-40 sm:right-[15%] w-1.5 sm:w-2 h-1.5 sm:h-2 bg-blue-300 rounded-full animate-pulse shadow-lg shadow-blue-300/50" style="animation-delay: 0.5s;"></div>
    <div class="absolute bottom-32 left-[15%] sm:bottom-48 sm:left-[20%] w-2 sm:w-3 h-2 sm:h-3 bg-yellow-300 rounded-full animate-pulse shadow-lg shadow-yellow-300/50" style="animation-delay: 1s;"></div>
    <div class="absolute top-40 right-[20%] sm:top-56 sm:right-[30%] w-1 sm:w-1.5 h-1 sm:h-1.5 bg-white rounded-full animate-pulse shadow-lg shadow-white/50" style="animation-delay: 1.5s;"></div>
    <div class="absolute bottom-24 right-[20%] sm:bottom-32 sm:right-[25%] w-2 sm:w-2.5 h-2 sm:h-2.5 bg-orange-400 rounded-full animate-pulse shadow-lg shadow-orange-400/50" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/3 left-[30%] sm:left-[35%] w-1.5 sm:w-2 h-1.5 sm:h-2 bg-purple-400 rounded-full animate-pulse shadow-lg shadow-purple-400/50" style="animation-delay: 2.5s;"></div>

    <div class="container-max relative z-10">
        <div class="max-w-5xl mx-auto text-center px-3 sm:px-4 md:px-6 lg:px-4">
            <!-- Animated Badge -->
            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-400/20 to-yellow-500/10 backdrop-blur-md rounded-full mb-6 sm:mb-8 border border-yellow-400/30 shadow-lg shadow-yellow-500/10 opacity-0 animate-slide-down">
                <svg class="w-5 h-5 text-yellow-400 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-bold bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent">Explore Gujarat's Hidden Gems</span>
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold mb-4 sm:mb-6 leading-[1.1] opacity-0 animate-fade-in">
                <span class="block text-white drop-shadow-2xl">Discover Amazing</span>
                <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 drop-shadow-xl animate-gradient">
                    Tour Packages
                </span>
            </h1>
            
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-200 mb-8 sm:mb-12 leading-relaxed opacity-0 animate-fade-in-delayed max-w-3xl mx-auto font-light">
                Experience the spiritual, cultural, and natural wonders of Gujarat with our expertly curated tour packages
            </p>

            <!-- Stats with Enhanced Design -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8 lg:gap-12 max-w-3xl mx-auto opacity-0 animate-slide-up mb-12 sm:mb-16">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 to-orange-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                    <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                        <div class="text-3xl sm:text-4xl md:text-5xl font-extrabold bg-gradient-to-br from-yellow-400 to-yellow-200 bg-clip-text text-transparent mb-2">15+</div>
                        <div class="text-xs md:text-sm text-gray-300 font-semibold">Destinations</div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-cyan-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                    <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                        <div class="text-3xl sm:text-4xl md:text-5xl font-extrabold bg-gradient-to-br from-yellow-400 to-yellow-200 bg-clip-text text-transparent mb-2">500+</div>
                        <div class="text-xs md:text-sm text-gray-300 font-semibold">Happy Tourists</div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 to-amber-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                    <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                        <div class="text-3xl sm:text-4xl md:text-5xl font-extrabold bg-gradient-to-br from-yellow-400 to-yellow-200 bg-clip-text text-transparent mb-2">4.9★</div>
                        <div class="text-xs md:text-sm text-gray-300 font-semibold">Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular Destinations Section -->
<section class="py-12 sm:py-16 md:py-24 bg-white">
    <div class="container-max">
        <!-- Section Header -->
        <div class="text-center mb-6 sm:mb-8 md:mb-12 px-3 sm:px-0">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-3 sm:mb-4">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Popular Destinations</span>
            </div>
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-extrabold text-[#1a3a52] mb-2 sm:mb-3">
                Explore Amazing Places
            </h2>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 max-w-3xl mx-auto">
                Discover India's most beautiful destinations from vibrant cities to heritage sites
            </p>
        </div>

        <!-- Destinations Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-6 px-3 sm:px-0">
            
            <!-- Mumbai -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/mumbai-gateway.jpg') }}" 
                         alt="Mumbai" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-purple-500 text-white text-xs font-bold rounded-full shadow-lg">
                        City Life
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">830 km away</span>
                    </div>
                    
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Mumbai</h3>
                    <p class="text-sm text-gray-600 mb-3 sm:mb-4 line-clamp-2">The city that never sleeps - Gateway of India</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.6 Rating</span>
                        </div>
                        <a href="#toursGrid" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Udaipur -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/udaipur-lakes.jpg') }}" 
                         alt="Udaipur" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-pink-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Royal Heritage
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">420 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Udaipur</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">City of Lakes - Majestic palaces and heritage</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.8 Rating</span>
                        </div>
                        <a href="#toursGrid" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Agra -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/agra-tajmahal.jpg') }}" 
                         alt="Agra" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-amber-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Wonder of World
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">1050 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Agra</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Home to iconic Taj Mahal monument</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.9 Rating</span>
                        </div>
                        <a href="#toursGrid" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Goa -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/goa-beach.jpg') }}" 
                         alt="Goa" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-teal-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Beach Paradise
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">630 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Goa</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Stunning beaches, vibrant nightlife & Portuguese heritage</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.7 Rating</span>
                        </div>
                        <a href="#toursGrid" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Tours Grid -->
<section class="py-12 sm:py-16 md:py-24 bg-gray-50">
    <div class="container-max">
        <!-- Section Header -->
        <div class="text-center mb-6 sm:mb-8 md:mb-12 px-3 sm:px-0">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-extrabold text-[#1a3a52] mb-2 sm:mb-3">
                Gujarat's Best <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-600">Tour Packages</span>
            </h2>
            <p class="text-xs sm:text-sm md:text-base text-gray-600 max-w-2xl mx-auto">
                Experience spiritual heritage, wildlife adventures & scenic beauty
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 md:gap-6 lg:gap-8 px-3 sm:px-0" id="toursGrid">
            
            @include('partials.tour-card', [
                'image' => asset('images/tours/dwarka-temple.jpg'),
                'title' => 'Dwarka - Krishna\'s Sacred City',
                'description' => 'Explore the legendary ancient city of Lord Krishna, one of the Char Dham pilgrimage sites with magnificent temples and spiritual heritage.',
                'duration' => '1 Day',
                'distance' => '85 km',
                'category' => 'spiritual',
                'badge' => '4.9',
                'highlights' => [
                    'Dwarkadhish Temple - 2,500 years old architectural marvel',
                    'Nageshwar Jyotirlinga - One of 12 sacred Shiva temples',
                    'Beyt Dwarka Island - Ancient Krishna temples by sea',
                    'Rukmini Devi Temple - Beautiful 12th century heritage',
                    'Gomti Ghat - Sacred river bathing and rituals'
                ],
                'price' => '2,500',
                'priceNote' => 'vehicle',
                'tourId' => 'dwarka'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/somnath-jyotirlinga.jpg'),
                'title' => 'Somnath - First Jyotirlinga',
                'description' => 'Visit the magnificent Somnath Temple on the Arabian Sea coast, first among 12 Jyotirlingas, destroyed and rebuilt 17 times through history.',
                'duration' => '1 Day',
                'distance' => '180 km',
                'category' => 'spiritual',
                'badge' => '4.8',
                'highlights' => [
                    'Somnath Temple - Grand Jyotirlinga overlooking Arabian Sea',
                    'Evening Aarti - Spectacular worship ceremony at sunset',
                    'Triveni Sangam - Holy confluence of 3 sacred rivers',
                    'Bhalka Tirth - Where Lord Krishna left earthly body',
                    'Beach Walk - Pristine coastal views and serenity'
                ],
                'price' => '3,200',
                'priceNote' => 'vehicle',
                'tourId' => 'somnath',
                'delay' => '100'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/gir-lion-safari.jpg'),
                'title' => 'Gir National Park - Lion Safari',
                'description' => 'Only place on Earth to see Asiatic Lions in the wild. Home to 600+ lions across 1,400 sq km protected forest with rich biodiversity.',
                'duration' => '1 Day',
                'distance' => '65 km',
                'category' => 'adventure',
                'badge' => '5.0',
                'highlights' => [
                    'Asiatic Lion Sighting - 90% success rate guaranteed',
                    'Wildlife Safari - Leopards, deer, antelopes, 300+ bird species',
                    'Kamaleshwar Dam - Scenic water body with crocodiles',
                    'Forest Nature Walk - Expert naturalist guided trails',
                    'Interpretation Zone - Lions in open safari vehicle'
                ],
                'price' => '4,500',
                'priceNote' => 'vehicle',
                'tourId' => 'gir',
                'delay' => '200'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/gir-track.jpg'),
                'title' => 'Girnar Mountain Trek',
                'description' => 'Sacred peak with 10,000 steps to ancient Jain & Hindu temples. Challenging pilgrimage trek with ropeway option and breathtaking views.',
                'duration' => '1 Day',
                'distance' => '95 km',
                'category' => 'adventure',
                'badge' => '4.8',
                'highlights' => [
                    'Sacred Trek - 10,000 steps to ancient mountain temples',
                    'Ropeway Option - Modern cable car for easy access',
                    'Temple Complex - 800+ year old Jain and Hindu shrines'
                ],
                'price' => '2,800',
                'priceNote' => 'vehicle',
                'tourId' => 'girnar',
                'delay' => '0'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/statue-of-unity.jpg'),
                'title' => 'Statue of Unity',
                'description' => 'World\'s tallest statue at 182m dedicated to Sardar Patel. Iconic monument with museum, valley of flowers, and panoramic viewing gallery.',
                'duration' => '1 Day',
                'distance' => '375 km',
                'category' => 'adventure',
                'badge' => '4.9',
                'highlights' => [
                    'Tallest Statue - 182m bronze monument of Sardar Patel',
                    'Viewing Gallery - 153m high observation deck with stunning views',
                    'Valley of Flowers - 24-acre garden with colorful blooms'
                ],
                'price' => '4,500',
                'priceNote' => 'vehicle',
                'tourId' => 'statue-unity',
                'delay' => '100'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/saputara-hill.jpg'),
                'title' => 'Saputara Hill Station',
                'description' => 'Gujarat\'s only hill station nestled in Sahyadri ranges at 1,000m. Pleasant climate, waterfalls, tribal culture, and scenic beauty.',
                'duration' => '2 Days',
                'distance' => '460 km',
                'category' => 'weekend',
                'badge' => '4.7',
                'highlights' => [
                    'Saputara Lake - Boating in serene mountain lake',
                    'Gira Waterfalls - Spectacular 75-feet cascading waterfall',
                    'Sunset Point - Panoramic Sahyadri mountain views'
                ],
                'price' => '6,500',
                'priceNote' => 'vehicle',
                'tourId' => 'saputara',
                'delay' => '200'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/kutch-desert.jpg'),
                'title' => 'Rann of Kutch - White Desert',
                'description' => 'World\'s largest salt desert spanning 7,500 sq km. Experience the surreal white landscape, vibrant culture, and stunning sunsets.',
                'duration' => '2 Days',
                'distance' => '320 km',
                'category' => 'weekend',
                'badge' => '5.0',
                'highlights' => [
                    'White Rann - Endless salt desert under moonlight',
                    'Rann Utsav - Cultural festival with folk performances',
                    'Desert Safari - Camel rides across white landscape'
                ],
                'price' => '7,500',
                'priceNote' => 'vehicle',
                'tourId' => 'kutch',
                'delay' => '0'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/coastal-drive.jpg'),
                'title' => 'Diu - Portuguese Paradise',
                'description' => 'Coastal town with Portuguese architecture, pristine beaches, historic forts, and relaxed island vibes perfect for weekend getaway.',
                'duration' => '2 Days',
                'distance' => '280 km',
                'category' => 'weekend',
                'badge' => '4.8',
                'highlights' => [
                    'Diu Fort - 16th century Portuguese fortress by sea',
                    'Nagoa Beach - Golden sands and water sports',
                    'St. Paul\'s Church - Baroque architecture masterpiece'
                ],
                'price' => '6,000',
                'priceNote' => 'vehicle',
                'tourId' => 'diu',
                'delay' => '100'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/Ahmedabad-Heritage.jpg'),
                'title' => 'Ahmedabad Heritage Walk',
                'description' => 'India\'s first UNESCO World Heritage City. Explore Sabarmati Ashram, old city pols, textile museums, and vibrant street food culture.',
                'duration' => '1 Day',
                'distance' => '340 km',
                'category' => 'spiritual',
                'badge' => '4.7',
                'highlights' => [
                    'Sabarmati Ashram - Gandhi\'s home and freedom struggle base',
                    'Heritage Pols - 600-year-old traditional neighborhood',
                    'Adalaj Stepwell - Architectural wonder from 1499'
                ],
                'price' => '4,200',
                'priceNote' => 'vehicle',
                'tourId' => 'ahmedabad',
                'delay' => '200'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/gir-forest.jpg'),
                'title' => 'Palitana - Jain Temple City',
                'description' => 'Holiest Jain pilgrimage with 863 marble temples atop Shatrunjaya hills. Climb 3,500 steps to witness architectural splendor.',
                'duration' => '1 Day',
                'distance' => '250 km',
                'category' => 'spiritual',
                'badge' => '4.9',
                'highlights' => [
                    '863 Temples - Largest Jain temple complex in world',
                    'Shatrunjaya Hills - Sacred peak at 603m height',
                    'Marble Architecture - Intricate carvings and domes'
                ],
                'price' => '4,000',
                'priceNote' => 'vehicle',
                'tourId' => 'palitana',
                'delay' => '0'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/Champaner-Pavagadh.jpg'),
                'title' => 'Champaner-Pavagadh',
                'description' => 'UNESCO World Heritage Site combining Hindu and Islamic architecture. Ancient hill fortress with temples, mosques, and stunning views.',
                'duration' => '1 Day',
                'distance' => '380 km',
                'category' => 'spiritual',
                'badge' => '4.6',
                'highlights' => [
                    'Kalika Mata Temple - Hilltop shrine with ropeway',
                    'Champaner Fort - 8th century fortified city ruins',
                    'Jami Masjid - Grand mosque with 172 pillars'
                ],
                'price' => '4,800',
                'priceNote' => 'vehicle',
                'tourId' => 'champaner',
                'delay' => '100'
            ])

            @include('partials.tour-card', [
                'image' => asset('images/tours/coastal-drive.jpg'),
                'title' => 'Patan - Rani ki Vav Stepwell',
                'description' => 'UNESCO World Heritage stepwell, an architectural marvel from 11th century. Intricate carvings depicting mythology and daily life.',
                'duration' => '1 Day',
                'distance' => '420 km',
                'category' => 'adventure',
                'badge' => '4.8',
                'highlights' => [
                    'Rani ki Vav - 7-story underground stepwell marvel',
                    'Patola Silk - Traditional double ikat weaving',
                    'Sahastralinga Talav - Ancient reservoir with shrines'
                ],
                'price' => '5,200',
                'priceNote' => 'vehicle',
                'tourId' => 'patan',
                'delay' => '200'
            ])

        </div>
    </div>
</section>

<!-- Custom Tour CTA -->
<section class="py-20 md:py-28 relative overflow-hidden bg-gradient-to-br from-[#1a3a52] to-[#0f2537]">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full filter blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400 rounded-full filter blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>

    <div class="container-max relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full mb-6 animate-bounce-slow">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                </svg>
                <span class="text-yellow-400 font-semibold text-sm">Customizable Tours</span>
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
                Create Your
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                    Dream Tour
                </span>
            </h2>
            
            <p class="text-xl text-white/90 mb-10 leading-relaxed max-w-2xl mx-auto">
                Can't find the perfect tour? No problem! Our team will craft a personalized itinerary tailored to your interests.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    <span>Request Custom Tour</span>
                </a>
                <a href="tel:+919009058600" class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold text-lg rounded-xl border-2 border-white/30 hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.893.953a15.13 15.13 0 006.97 6.97l.953-1.893a1 1 0 011.06-.54l4.438.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <span>Call Now</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 md:py-28 bg-white">
    <div class="container-max">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-4">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Premium Services</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-4">What Makes Our Tours Special?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Experience the difference with our award-winning tour services</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative text-center group transform hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/10 to-orange-500/5 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-8 shadow-lg group-hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:shadow-2xl group-hover:rotate-6 transition-all duration-500">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-3">Luxury Transport</h3>
                    <p class="text-gray-600 leading-relaxed">Premium AC vehicles with comfortable seating and modern amenities</p>
                </div>
            </div>

            <div class="relative text-center group transform hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400/10 to-cyan-500/5 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-8 shadow-lg group-hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:shadow-2xl group-hover:rotate-6 transition-all duration-500">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-3">Expert Guides</h3>
                    <p class="text-gray-600 leading-relaxed">Certified professional guides with deep local knowledge and expertise</p>
                </div>
            </div>

            <div class="relative text-center group transform hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-br from-green-400/10 to-emerald-500/5 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-8 shadow-lg group-hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:shadow-2xl group-hover:rotate-6 transition-all duration-500">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-3">Flexible Timing</h3>
                    <p class="text-gray-600 leading-relaxed">Customizable schedules that perfectly match your preferences</p>
                </div>
            </div>

            <div class="relative text-center group transform hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-400/10 to-pink-500/5 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-8 shadow-lg group-hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:shadow-2xl group-hover:rotate-6 transition-all duration-500">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-3">Best Value</h3>
                    <p class="text-gray-600 leading-relaxed">Competitive pricing with transparent rates and no hidden charges</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
    </div>

    <div class="container-max relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-4">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Customer Reviews</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-4">What Our Travelers Say</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Real experiences from our satisfied customers exploring Gujarat</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6 italic">"Our Dwarka tour was absolutely magical! The driver was professional, the vehicle was spotless, and our guide's knowledge made the experience unforgettable. Highly recommend!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        RS
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a3a52]">Rajesh Shah</h4>
                        <p class="text-sm text-gray-500">Dwarka Tour - January 2026</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6 italic">"The Gir safari exceeded all expectations! We saw lions up close and the entire experience was well-organized. The team's attention to detail was impressive!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        PM
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a3a52]">Priya Mehta</h4>
                        <p class="text-sm text-gray-500">Gir Safari - December 2025</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6 italic">"Perfect weekend getaway! From Dwarka to Somnath and Gir, everything was seamlessly planned. Great value for money. Will definitely book again!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        AK
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a3a52]">Amit Kumar</h4>
                        <p class="text-sm text-gray-500">Weekend Package - February 2026</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 pt-12 border-t border-gray-200">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-2">500+</div>
                    <div class="text-gray-600 font-semibold">Happy Tourists</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-2">4.9/5</div>
                    <div class="text-gray-600 font-semibold">Average Rating</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-2">15+</div>
                    <div class="text-gray-600 font-semibold">Tour Packages</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-2">100%</div>
                    <div class="text-gray-600 font-semibold">Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-20 bg-gradient-to-r from-gray-50 to-gray-100">
    <div class="container-max text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-6">Ready for an Unforgettable Adventure?</h2>
            <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                Book your dream tour today and create memories that will last a lifetime!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/booking" class="group inline-flex items-center justify-center gap-3 px-10 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Book Your Tour Now</span>
                </a>
                <a href="/contact" class="group inline-flex items-center justify-center gap-3 px-10 py-5 bg-white text-[#1a3a52] font-bold text-lg rounded-xl border-2 border-[#1a3a52] hover:bg-[#1a3a52] hover:text-white transform hover:scale-105 transition-all duration-300">
                    <span>Have Questions?</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('extra_js')
<script src="{{ asset('js/tours.js') }}"></script>
@endsection

{{-- Tour Package Card --}}
<div class="tour-card group relative opacity-0" 
     data-category="{{ $category }}" 
     data-aos="fade-up" 
     data-aos-delay="{{ isset($delay) ? $delay : '0' }}"
     data-tour-id="{{ $tourId }}">
    
    <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
        
        {{-- Image with Overlay --}}
        <div class="relative h-48 sm:h-56 md:h-64 lg:h-72 overflow-hidden">
            <img src="{{ $image }}" 
                 alt="{{ $title }}" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            
            {{-- Dark Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
            
            {{-- Top Badge - Distance Only --}}
            <div class="absolute top-2 sm:top-4 left-2 sm:left-4 z-10">
                <div class="flex items-center gap-1.5 px-2 sm:px-3 py-1 sm:py-1.5 bg-white/95 backdrop-blur-sm rounded-lg shadow-md">
                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-xs sm:text-sm font-bold text-gray-700">{{ $distance }}</span>
                </div>
            </div>
            
            {{-- Title Overlay --}}
            <div class="absolute bottom-0 left-0 right-0 p-3 sm:p-5 z-10">
                <h3 class="text-lg sm:text-xl font-bold text-white mb-1 sm:mb-2 leading-tight">{{ $title }}</h3>
                <div class="flex items-center gap-2 text-white/90 text-xs sm:text-sm">
                    <span class="capitalize font-semibold">{{ $category }}</span>
                    <span class="text-white/60">•</span>
                    <span class="font-medium">{{ $duration }}</span>
                </div>
            </div>
        </div>
        
        {{-- Card Body --}}
        <div class="p-3 sm:p-5 flex-1 flex flex-col">
            
            {{-- Highlights Section --}}
            <div class="mb-4 flex-1">
                <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">
                    Top Highlights
                </h4>
                <div class="space-y-1.5">
                    @foreach(array_slice($highlights, 0, 3) as $highlight)
                    <div class="flex items-start gap-2">
                        <svg class="w-3 h-3 text-yellow-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-xs sm:text-sm text-gray-600 leading-tight">{{ $highlight }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            
            {{-- Distance & Duration Grid --}}
            <div class="grid grid-cols-2 gap-3 py-3 sm:py-4 border-t border-gray-100">
                <div class="text-center">
                    <div class="text-xl sm:text-2xl font-bold text-gray-800">{{ $distance }}</div>
                    <div class="text-xs text-gray-500 font-medium mt-1">Distance</div>
                </div>
                <div class="text-center">
                    <div class="text-xl sm:text-2xl font-bold text-gray-800">{{ $duration }}</div>
                    <div class="text-xs text-gray-500 font-medium mt-1">Duration</div>
                </div>
            </div>
        </div>
        
    </div>
</div>

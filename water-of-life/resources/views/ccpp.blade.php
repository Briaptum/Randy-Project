<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>calvary chapel phnom penh</title>
</head>
<body>
    <x-header />
    
    <main class="flex flex-col bg-fixed bg-cover bg-center h-[80rem]" style="background-image: url('/images/light-blue-bg-2.jpg');">
        <div class="flex flex-col items-center justify-center max-w-[60rem] min-h-[40rem] mx-auto px-10 pt-10">
            <div class="bg-black/20 p-20 rounded-lg">
                <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white font-bold">Calvary Chapel</h1>
                <h2 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl mt-2 text-white">Phnom Penh</h2>
                <h3 class="text-center text-lg sm:text-xl md:text-2xl mt-6 text-white">Studying the Word verse by verse, chapter by chapter </h3>
                    <h3 class="text-center text-lg sm:text-xl md:text-2xl text-white">Please join us for </h3>

                    <p class="text-center text-lg sm:text-xl md:text-2xl text-white font-bold underline">Sunday morning worship  9:00 a.m.</p>
                    <p class="text-center text-lg sm:text-xl md:text-2xl text-white font-bold underline">Wednesday night Church  7:00 p.m.</p>
                    

                    <p class="text-center text-lg sm:text-xl md:text-2xl text-white">Sunday School is provided for children under the age of 12.</p> 
                    <p class="text-center text-lg sm:text-xl md:text-2xl text-white">Don't forget to bring a friend!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">


                    <button class="sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                        <a href="/contact-us">

                            Contact us to know more
                        </a>
                    </button>

                    <button class="sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                        <a href="/donate">
                            Donate to the church
                        </a>
                    </button>
                </div>
            </div>
            <div class="mt-8 relative max-w-3xl mx-auto mb-20">
                <div class="overflow-hidden relative w-full h-[400px] rounded-lg bg-black/20">
                    <div class="flex transition-transform duration-500 ease-in-out w-full h-full" id="slider">
                        <img src="{{ asset('images/ccpp-1.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 1">
                        <img src="{{ asset('images/ccpp-2.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 2">
                        <img src="{{ asset('images/ccpp-3.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 3">
                        <img src="{{ asset('images/ccpp-4.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 4">
                        <!-- <img src="{{ asset('images/ccpp-5.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 5"> -->
                        <img src="{{ asset('images/ccpp-6.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 6">
                        <img src="{{ asset('images/ccpp-7.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 7">
                        <img src="{{ asset('images/ccpp-8.jpg') }}" class="min-w-full w-full h-full object-scale-down flex-shrink-0 px-4" alt="CCPP Image 8">
                    </div>
                    



                    <!-- Navigation Buttons -->
                    <button onclick="moveSlide(-1)" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="moveSlide(1)" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <script>
                let currentSlide = 0;
                const slider = document.getElementById('slider');
                const slides = slider.children;
                const totalSlides = slides.length;

                function moveSlide(direction) {
                    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                }

                // Auto-advance slides every 5 seconds
                setInterval(() => moveSlide(1), 5000);
            </script>
        </div>
    </main>

    <x-footer />

</body>

</html>
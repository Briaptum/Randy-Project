<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Girls House</title>
</head>
<body>

    <x-header />

    <main class="min-h-50 flex flex-col bg-fixed bg-cover bg-center p-4 bg-white mb-10">
        <div class="text-center h-screen max-w-[60rem] mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mt-140 text-black">Water Of Life Girls House!</h1>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black"> Part of the ministry at Water of Life is a girls home, where Gals who wish to receive an <span class="font-bold text-custom-cyan">education</span> are housed in a <span class="font-bold text-custom-cyan">family environment</span>. girls are usually the last to receive an education so this is a great help to them. They are also discipled and given work opportunities.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">Twomen are given opportunities to change their lives. A type of u-turn for christ program. Each of these women has her own story, but usually all come from very vulnerable situations.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">Water of Life Girl's Homes are a safe-haven where  young women live and are able to attend university while they are grounded in the Word, and are <span class="font-bold text-custom-cyan">spiritually discipled</span>.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">They are well <span class="font-bold text-custom-cyan">loved</span> and are <span class="font-bold text-custom-cyan">provided</span> the practical help they need to prepare them for life transformation.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">
            Your <span class="font-bold text-custom-cyan">prayer</span> and <span class="font-bold text-custom-cyan">support</span> are greatly needed for this ministry.
            </p>
            <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                <a href="/contact">
                    Contact Us To Learn More!
                </a>
            </button>
            <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                <a href="/contact">
                    Donate to the girls house!
                </a>
            </button>
            <div class="mt-8 relative max-w-3xl mx-auto mb-20 mt-10">
                <div class="overflow-hidden relative h-64 sm:h-80 lg:h-96 rounded-lg">
                    <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                        <img src="{{ asset('images/girls-1.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 1">
                        <img src="{{ asset('images/girls-2.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 2">
                        <img src="{{ asset('images/girls-3.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 3">
                        <img src="{{ asset('images/girls-4.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 4">
                        <img src="{{ asset('images/girls-5.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 5">
                        <img src="{{ asset('images/girls-6.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 6">
                        <img src="{{ asset('images/girls-7.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 7">
                        <img src="{{ asset('images/girls-8.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 8">
                        <img src="{{ asset('images/girls-9.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 9">
                        <img src="{{ asset('images/girls-10.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 10">
                        <img src="{{ asset('images/girls-11.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 11">
                        <img src="{{ asset('images/girls-12.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 12">
                        <img src="{{ asset('images/girls-13.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 13">
                        <img src="{{ asset('images/girls-14.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 14">
                        <img src="{{ asset('images/girls-15.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Girls House Image 15">
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
        </div>

        <script>
            let currentSlide = 0;
            const slider = document.getElementById('slider');
            const totalSlides = document.querySelectorAll('#slider img').length;

            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                updateDots();
            }

            function moveSlide(direction) {
                currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                updateSlider();
            }

            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                updateSlider();
            }

            function updateDots() {
                const dots = document.querySelectorAll('.bottom-4 button');
                dots.forEach((dot, index) => {
                    dot.style.opacity = index === currentSlide ? '1' : '0.5';
                });
            }

            // Auto-advance slides every 5 seconds
            setInterval(() => moveSlide(1), 5000);

            // Initialize dots
            updateDots();
        </script>
    </main>

    <x-footer />
</body>
</html>
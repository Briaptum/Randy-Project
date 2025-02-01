<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Boys House</title>
</head>
<body>

    <x-header />

    <main class="min-h-50 flex flex-col bg-fixed bg-cover bg-center p-4 bg-white mb-10">
        <div class="text-center h-screen max-w-[60rem] mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mt-140 text-black">Water Of Life Boys House!</h1>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">We have <span class="font-bold text-custom-cyan">BLESSED</span> to have about
            25+ young men <span class="font-bold text-custom-cyan">currently</span> living with at the water of life center.
            Ages of these awesome young men range from 14 - 25.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">These boys wanted 
            Education, training, skills, God
            some are orphans, but
            most are just kids who needed a hand
            in a poor disadvantaged country
            to get an edcuation.
            to learn about God
            to have an impact on the future
            of cambodia</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">Here at WOL
            they are given opportunities
            they <span class="font-bold text-custom-cyan">ABSOLUTELY</span> appreciated.
            They are <span class="font-bold text-custom-cyan">FED</span>, <span class="font-bold text-custom-cyan">HOUSED</span>, <span class="font-bold text-custom-cyan">EDUCATED</span>,
            <span class="font-bold text-custom-cyan">ENCOURAGED</span>, <span class="font-bold text-custom-cyan">TREASURED</span>,
            <span class="font-bold text-custom-cyan">AND LOVED</span> </p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black"><span class="font-bold text-custom-cyan">CHRIST</span> IS AT THE CENTER OF THIS HOUSE.
            they are being <span class="font-bold text-custom-cyan">DISCIPLED</span>
            by going through
            the bible
            chapter by chapter,
            verse by verse everynight.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-black">
                All these boys not only come to get education for themselves, but also they spread the <span class="font-bold text-custom-cyan">WORDS OF GOD</span>  to their friends and family!
            </p>
            <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                <a href="/contact">
                    Contact Us To Learn More!
                </a>
            </button>
            <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                <a href="/contact">
                    Donate to the boys house!
                </a>
            </button>
            <div class="mt-8 relative max-w-3xl mx-auto mb-20 mt-10">
                <div class="overflow-hidden relative h-64 sm:h-80 lg:h-96 rounded-lg">
                    <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                        <img src="{{ asset('images/boys-1.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 1">
                        <img src="{{ asset('images/boys-2.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 2">
                        <img src="{{ asset('images/boys-3.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 3">
                        <img src="{{ asset('images/boys-4.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 4">
                        <img src="{{ asset('images/boys-5.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 5">
                        <img src="{{ asset('images/boys-6.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 6">
                        <img src="{{ asset('images/boys-7.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 7">
                        <img src="{{ asset('images/boys-8.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 8">
                        <img src="{{ asset('images/boys-9.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 9">
                        <img src="{{ asset('images/boys-10.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 10">
                        <img src="{{ asset('images/boys-11.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 11">
                        <img src="{{ asset('images/boys-12.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 12">
                        <img src="{{ asset('images/boys-13.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 13">
                        <img src="{{ asset('images/boys-14.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 14">
                        <img src="{{ asset('images/boys-15.jpg') }}" class="w-full h-full object-cover bg-gray-100 flex-shrink-0" alt="Boys House Image 15">
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Children Of Hope</title>
</head>
<body>
    <x-header />
    
    <main class="flex flex-col bg-fixed bg-cover bg-center h-screen" style="background-image: url('/images/background.jpg');">
        <div class="flex flex-col items-center justify-center max-w-[60rem] min-h-[30rem] mx-auto px-4 pt-10">
            <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl mt-140 text-gray-900">Welcome to Children Of Hope!</h1>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700">Family, education, and training
            unwanted children is near and dear to the hearts at Children of Hope.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700">The kids at COH Home
            are some of the coolest kids
            on the planet. 
            Although some of them
            are actual orphans,
            the majority are
            de-facto orphans, meaning

            they may have at least
            one living parent
            but their situation required
            them to be brought into the care
            of COH home. 
            This could be because they
            were being abused, neglected,
            were begging on the streets
            or because their parent(s)
            refused to <span class="text-black font-bold">take care of them.</span> </p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700">COH is a small group home
            with parenting staff for kids
            who could not be returned to 
            their families.</p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700">They have helped several kids 
            for an interim period while their 
            family could be strengthen to 
            raise the child, or foster families 
            could be found - but for these kids
            this is their family.
            They are not
            on display or used for propaganda. 
            they are family to the loving parents
            at coh </p>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700"> Between Katherine Steele, who heads up  COH, and the staff of COH,
            these kids are loved, educated and cared
            for in a safe environment. 
            Best of all, they are being raised up
            in the knowledge and love
            of Jesus and regularly attend
            youth worship services
            at Water of Life.</p>


            <div class="flex gap-4">
            <button class="sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                    <a href="/contact-us">
                        Contact us to know more!
                    </a>
                </button>

                <button class="sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                    <a href="/help/donate">
                        Donate to COH
                    </a>
                </button>
            </div>
        </div>
    </main>
    <section class="bg-gray-200 flex flex-col items-center justify-center mx-auto px-4 pt-10">
        <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-gray-900">Galleries of COH</h1>

        <div x-data="{ currentSlide: 0 }" class="relative w-full max-w-4xl mt-8 max-w-[60rem] min-h-[35rem]">
            <!-- Slides -->
            <div class="relative h-[400px] overflow-hidden rounded-lg">
                <div x-show="currentSlide === 0" class="absolute w-full h-full transition-opacity duration-500">
                    <img src="/images/boys-1.jpg" alt="COH Image 1" class="w-full h-full object-cover">
                </div>
                <div x-show="currentSlide === 1" class="absolute w-full h-full transition-opacity duration-500">
                    <img src="/images/boys-2.jpg" alt="COH Image 2" class="w-full h-full object-cover">
                </div>

                <div x-show="currentSlide === 2" class="absolute w-full h-full transition-opacity duration-500">
                    <img src="/images/boys-3.jpg" alt="COH Image 3" class="w-full h-full object-cover">
                </div>

                <div x-show="currentSlide === 3" class="absolute w-full h-full transition-opacity duration-500">
                    <img src="/images/boys-4.jpg" alt="COH Image 4" class="w-full h-full object-cover">
                </div>


                <!-- Previous/Next Buttons -->
                <button @click="currentSlide = currentSlide === 0 ? 3 : currentSlide - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="currentSlide = currentSlide === 3 ? 0 : currentSlide + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>
    </section>
    <x-footer />

</body>

</html>
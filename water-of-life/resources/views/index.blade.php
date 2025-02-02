<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Water of Life</title>
</head>
<body>
    <x-header />
    
    <main class="flex flex-col bg-fixed bg-cover bg-center h-[50rem]" style="background-image: url('/images/background.jpg');">
        <div class="flex flex-col items-center justify-center max-w-[50rem] min-h-[30rem] mx-auto px-4">
            <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl mt-140 text-gray-900">Welcome to Water Of Life!</h1>
            <p class="text-center text-lg sm:text-xl md:text-2xl mt-4 text-gray-700">We are a non-profit organization dedicated to providing help to children who are in need. If you want get to know or contact us, you can use the following social media platforms.</p>
            <div class="flex gap-4">
                <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                    <a href="/about-us">
                        About us
                    </a>
                </button>
                <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md mt-4 hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                    <a href="/donate">
                        Donate
                    </a>
                </button>
            </div>
            <div class="social-icons flex gap-4 sm:gap-6 mt-8">
                <a href="https://www.facebook.com/WaterofLife"  target="_blank" class="text-black hover:text-blue-600 transition-colors duration-300">
                    <i class="fab fa-facebook text-2xl sm:text-3xl md:text-4xl"></i>
                </a>
                <a href="https://www.instagram.com/wateroflife" class="text-black hover:text-pink-600 transition-colors duration-300">
                    <i class="fab fa-instagram text-2xl sm:text-3xl md:text-4xl"></i>
                </a>
                <a href="https://twitter.com/wateroflife" class="text-black hover:text-blue-400 transition-colors duration-300">
                    <i class="fab fa-twitter text-2xl sm:text-3xl md:text-4xl"></i>
                </a>
                <a href="https://www.youtube.com/wateroflife" class="text-black hover:text-red-600 transition-colors duration-300">
                    <i class="fab fa-youtube text-2xl sm:text-3xl md:text-4xl"></i>
                </a>
                <a href="https://t.me/wateroflife" class="text-black hover:text-[#0088cc] transition-colors duration-300">
                    <i class="fab fa-telegram text-2xl sm:text-3xl md:text-4xl"></i>
                </a>
            </div>
        </div>
    </main>
    <x-footer />

</body>

</html>
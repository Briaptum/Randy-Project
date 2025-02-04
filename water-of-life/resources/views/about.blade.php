<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>About Cambodia</title>
</head>
<body>
    <x-header />
    
    <main class="p-10 flex flex-col bg-fixed bg-cover bg-center min-h-screen" style="background-image: url('/images/gradient-bg.jpg');">
        <div class="bg-white mt-10 mb-10 rounded-lg flex flex-col md:flex-row max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 gap-8">
            <!-- Left Section -->

            <div class="md:w-1/2 space-y-6">

                <h1 class="text-4xl font-bold text-gray-900">Why Cambodia?</h1>
                <p class="text-lg text-gray-700">
                    <span class="font-bold text-custom-cyan">Cambodia</span>, or Kampuchea, is a small, Southeast Asian country located between Thailand, Laos, Vietnam and the Gulf of Thailand. The country is smaller than our state of Oklahoma, with a population of approximately 15 million. When reading statistics of Cambodia's people, government and geography, the country appears very similar to many other Southeast Asian countries. It has a tropical climate and many natural resources; it produces rice and has a rather unstable economy.
                </p>


                <p class="text-lg text-gray-700">
                What stands out about Cambodia though, especially to those with a heart for missions, is a striking component of Cambodia's population curve. Only 3 percent of Cambodia's people are over the age of 65, 52 percent are between the ages of 15 and 64, and 45 percent are 14 years old or younger. The reason for this lack of aged people is not simply a low life expectancy rate and high fertility rate, although those factors do play a role. The reason is found in what we have come to know as the Cambodian "killing fields" when, between 1975-1979, up to one-third (3.5 million) of Cambodia's people where systematically tortured and murdered by their own countrymen.
                </p>
                <p class="text-lg text-gray-700">
                The history of Cambodia seems to be riddled with instability, conflict and uncertainty. Even during periods of apparent peace and growth, such as the Angkorean period between 800 and 1450A.D. when the great temples at Angkor were built, forward movement and social accomplishments seem scarce. Internal conflicts between rulers and prospective rulers, as well as border conflicts with Thailand and Vietnam, seem to have virtually always existed.
                </p>
                <button class="bg-custom-cyan text-white px-4 py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border-custom-cyan">
                    <a href="https://www.cambodia.org/about-cambodia/why-cambodia" target="_blank">Read More</a>
                </button>
            </div>
            <!-- Right Section -->
            <div class="md:w-1/2 flex items-center justify-center">


                <div class="rounded-lg overflow-hidden shadow-xl w-full">
                    <img 
                        src="{{ asset('images/cambodia-bg.jpg') }}" 
                        alt="Traditional Cambodian Temple"
                        class="w-full h-[400px] object-cover">
                    <p class="text-custom-cyan text-center italic text-2xl p-2">
                        <a href="https://en.wikipedia.org/wiki/Angkor_Wat" target="_blank">Angkor Wat</a>
                    </p>
                </div>
            </div>
            
        </div>
    </main>

    <x-footer />

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
    <main class="p-10 flex flex-col bg-fixed bg-cover bg-center min-h-screen" style="background-image: url('/images/gradient-sky-bg.jpg');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Box 1 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/arey-ksat.jpg') }}" alt="Arey Kasat Ministry" class="w-full h-64 object-cover">
                    <div class="p-8">

                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Arey Kasat</h3>
                        <p class="text-gray-600 mb-6 text-lg">
                            Located in the heart of Cambodia, Arey Kasat ministry focuses on providing education and support to local communities. Through various programs, we help develop sustainable solutions for families in need.
                        </p>
                        <a href="/ministries/education" class="block text-custom-cyan hover:text-blue-700 text-lg mb-2">Contact to know more →</a>
                        <a href="/help/donate" class="block text-custom-cyan hover:text-blue-700 text-lg">Donate to Arey Kasat →</a>
                    </div>
                </div>




                <!-- Box 2 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/kp-outreach.jpg') }}" alt="Kompong Thom Ministry" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Kompong Thom</h3>
                        <p class="text-gray-600 mb-6 text-lg">
                            Our Kompong Thom ministry reaches out to rural communities, providing essential services and spiritual guidance. We work closely with local leaders to address community needs.
                        </p>
                        <a href="/ministries/evangelism" class="block text-custom-cyan hover:text-blue-700 text-lg mb-2">Contact to know more →</a>
                        <a href="/help/donate" class="block text-custom-cyan hover:text-blue-700 text-lg">Donate to Kompong Thom →</a>
                    </div>
                </div>


                <!-- Box 3 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/grace-church.jpg') }}" alt="Community Outreach" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Grace Church (SteungMeanchey)</h3>
                        <p class="text-gray-600 mb-6 text-lg">
                            Through our community outreach programs, we engage with local populations to provide support, education, and resources that help build stronger, more resilient communities.
                        </p>
                        <a href="/ministries/community" class="block text-custom-cyan hover:text-blue-700 text-lg mb-2">Contact to know more →</a>
                        <a href="/help/donate" class="block text-custom-cyan hover:text-blue-700 text-lg">Donate to Grace Church →</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <x-footer />

</body>

</html>
</body>
</html>
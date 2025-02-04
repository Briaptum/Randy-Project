<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Contact Us - Water of Life</title>
</head>
<body>
    <x-header />
    
    <main class="p-10 flex flex-col bg-fixed bg-cover bg-center min-h-screen" style="background-image: url('/images/gradient-sky-bg.jpg');">
        <div class="w-full max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-white rounded-lg shadow-xl">
            <h1 class="text-4xl text-gray-900 mb-4">How to help</h1>
            <p class="text-gray-600 mb-6 text-lg">We are always looking for ways to help the people of Cambodia. Please take a look at the following ways you can help.</p>
            <div class="space-y-8">
                @foreach($helpItems as $category => $items)
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">{{ $category }}</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($items as $item)
                                <div class="bg-white rounded-lg shadow-lg p-6">
                                    <h3 class="text-xl font-semibold mb-4">{{ $item->title }}</h3>
                                    <p class="text-gray-600">{{ $item->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="bg-custom-cyan text-white px-4 py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan mt-4">
                <a href="/contact">Contact Us To Know More</a>
            </button>
            <button class="bg-custom-cyan text-white px-4 py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan mt-4">
                <a href="/help/donate">Donate</a>
            </button>
        </div>
    </main>

    <x-footer />
</body>
</html>
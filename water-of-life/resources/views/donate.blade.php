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
            <h1 class="text-4xl text-gray-900 mb-4">Donate</h1>
            <p class="text-2xl text-gray-900 mb-4">Thank you for your generosity! We are grateful for your support. Even a small amount can make a big difference in the lives of those we serve.</p>
            <p class="text-2xl text-gray-900 mb-4">Donate by scanning this QR code:</p>
            <img src="/images/paypal-qr.webp" alt="QR Code" class="w-1/3 mx-auto">
        </div>
    </main>

    <x-footer />
</body>
</html>
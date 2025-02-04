<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Water of Life</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('index.index') }}" class="text-lg font-semibold text-gray-800">
                        Water of Life
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('dashboard.index') }}" class="text-gray-600 hover:text-gray-900">
                        Dashboard
                    </a>
                    <a href="{{ route('index.index') }}" class="ml-4 text-gray-600 hover:text-gray-900">
                        Back to Site
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white shadow-lg mt-8">
        <div class="max-w-7xl mx-auto py-4 px-4">
            <p class="text-center text-gray-600">
                © {{ date('Y') }} Water of Life. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html> 
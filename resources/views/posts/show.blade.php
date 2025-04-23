<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $post->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">

    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">
                My Awesome Blog
            </h1>
            {{-- Basic Nav Placeholder --}}
            <nav class="mt-2">
                <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-200 mr-4">Home</a>
                <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-200 mr-4">About</a>
                <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-200">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex flex-wrap -mx-4">

            <!-- Post Content -->
            <main class="w-full md:w-2/3 px-4 mb-8 md:mb-0">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-0">
                        {{ $post->title }}
                    </h1>
                    <livewire:post-comment-count :count="$post->comments->count()" />
                    <div class="prose dark:prose-invert max-w-none text-gray-700 dark:text-gray-300 mt-4">
                        {{ $post->body }}
                    </div>
                </div>

                <livewire:post-comments :post="$post" />
            </main>

            <!-- Right Sidebar -->
            <aside class="w-full md:w-1/3 px-4">
                <!-- Search Widget -->
                <div class="mb-6 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Search</h3>
                    <input type="text" placeholder="Search..." class="w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm text-gray-900 dark:text-white">
                </div>

                <!-- Categories Widget -->
                <div class="mb-6 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Categories</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700 dark:text-gray-300">
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Technology</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Laravel</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Web Development</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Tutorials</a></li>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="mb-6 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Recent Posts</h3>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Understanding Laravel 11 New Features</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">Building a Blog with Tailwind CSS</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">PHP 8.3 Performance Tips</a></li>
                    </ul>
                </div>

                 <!-- Archive Widget -->
                 <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Archives</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700 dark:text-gray-300">
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">July 2024</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">June 2024</a></li>
                        <li><a href="#" class="hover:text-red-500 dark:hover:text-red-400">May 2024</a></li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 mt-12 py-6 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500 dark:text-gray-400 text-sm">
            &copy; {{ date('Y') }} My Awesome Blog. All rights reserved.
        </div>
    </footer>

</body>
</html>

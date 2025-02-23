<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Wanderer | Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-900">Mindful Wanderer</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">Articles</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <div>
                        <a href="/login" class="bg-gray-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-800 transition">Sgin In</a>
                        <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700 transition">Sgin Up</a>
                    </div>
                </div>
                <div class="flex md:hidden items-center">
                    <button class="text-gray-500 hover:text-indigo-600">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Featured Post Hero -->
    <div class="relative bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="max-w-6xl mx-auto px-4 py-16 md:py-24">
            <div class="md:w-2/3">
                <span class="inline-block bg-indigo-200 bg-opacity-30 text-indigo-100 px-3 py-1 rounded-full text-xs uppercase tracking-wide mb-4">Featured Post</span>
                <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4">Discovering Mindfulness in the Digital Age</h1>
                <p class="text-lg md:text-xl text-indigo-100 mb-8">How to find balance and peace in our constantly connected world - practical tips for everyday mindfulness.</p>
                <div class="flex items-center space-x-4 mb-8">
                    <img src="/api/placeholder/40/40" alt="Author" class="h-10 w-10 rounded-full object-cover">
                    <div>
                        <p class="font-medium">Sarah Johnson</p>
                        <p class="text-indigo-200 text-sm">February 15, 2025 · 8 min read</p>
                    </div>
                </div>
                <a href="#" class="inline-block bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition">Read Article</a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </div>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-12">
        <!-- Category Pills -->
        <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">All</a>
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">Mindfulness</a>
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">Productivity</a>
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">Wellness</a>
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">Travel</a>
            <a href="#" class="bg-white px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition shadow-sm">Technology</a>
        </div>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold mb-8 text-center">Recent Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Article Card 1 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="/api/placeholder/600/400" alt="Article image" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-indigo-600 text-white text-xs px-3 py-1 rounded-full">Wellness</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 hover:text-indigo-600 transition">5 Morning Rituals to Transform Your Day</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Start your day with intention and purpose with these science-backed morning practices.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="Author" class="h-8 w-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700">Alex Rivera</span>
                        </div>
                        <span class="text-xs text-gray-500">Feb 18 · 5 min</span>
                    </div>
                </div>
            </article>

            <!-- Article Card 2 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="/api/placeholder/600/400" alt="Article image" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-green-600 text-white text-xs px-3 py-1 rounded-full">Productivity</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 hover:text-indigo-600 transition">Deep Work: How to Focus in a Distracted World</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Practical strategies to achieve focus and accomplish meaningful work in our hyper-connected environment.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="Author" class="h-8 w-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700">Maya Patel</span>
                        </div>
                        <span class="text-xs text-gray-500">Feb 14 · 7 min</span>
                    </div>
                </div>
            </article>

            <!-- Article Card 3 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-200">
                    <img src="/api/placeholder/600/400" alt="Article image" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">Travel</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 hover:text-indigo-600 transition">Slow Travel: The Art of Meaningful Exploration</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Discover how slowing down can transform your travel experiences and create deeper connections.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="Author" class="h-8 w-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700">Jin Kim</span>
                        </div>
                        <span class="text-xs text-gray-500">Feb 10 · 6 min</span>
                    </div>
                </div>
            </article>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 md:p-12 mb-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Join Our Mindful Community</h2>
                <p class="text-gray-700 mb-8">Get weekly insights, exclusive content, and mindfulness tips delivered straight to your inbox.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition">Subscribe</button>
                </form>
                <p class="text-xs text-gray-500 mt-4">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>

        <!-- Editor's Picks -->
        <h2 class="text-2xl font-bold mb-8 text-center">Editor's Picks</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Pick 1 -->
            <div class="flex gap-6">
                <div class="w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden bg-gray-200">
                    <img src="/api/placeholder/100/100" alt="Article thumbnail" class="w-full h-full object-cover">
                </div>
                <div>
                    <span class="text-indigo-600 text-sm font-medium">Technology</span>
                    <h3 class="font-bold text-lg mb-2 hover:text-indigo-600 transition">Digital Minimalism: Reclaiming Focus in the Age of Distraction</h3>
                    <p class="text-gray-600 text-sm mb-2">How to be intentional with technology use while maintaining digital connections.</p>
                    <span class="text-xs text-gray-500">Feb 5 · 9 min read</span>
                </div>
            </div>

            <!-- Pick 2 -->
            <div class="flex gap-6">
                <div class="w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden bg-gray-200">
                    <img src="/api/placeholder/100/100" alt="Article thumbnail" class="w-full h-full object-cover">
                </div>
                <div>
                    <span class="text-green-600 text-sm font-medium">Wellness</span>
                    <h3 class="font-bold text-lg mb-2 hover:text-indigo-600 transition">The Science of Forest Bathing: Nature as Medicine</h3>
                    <p class="text-gray-600 text-sm mb-2">Research-backed benefits of immersing yourself in nature for mental and physical health.</p>
                    <span class="text-xs text-gray-500">Jan 29 · 6 min read</span>
                </div>
            </div>

            <!-- Pick 3 -->
            <div class="flex gap-6">
                <div class="w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden bg-gray-200">
                    <img src="/api/placeholder/100/100" alt="Article thumbnail" class="w-full h-full object-cover">
                </div>
                <div>
                    <span class="text-purple-600 text-sm font-medium">Productivity</span>
                    <h3 class="font-bold text-lg mb-2 hover:text-indigo-600 transition">Time Blocking: The Scheduling Method Used by Top Performers</h3>
                    <p class="text-gray-600 text-sm mb-2">How to structure your day for maximum productivity and peace of mind.</p>
                    <span class="text-xs text-gray-500">Jan 22 · 7 min read</span>
                </div>
            </div>

            <!-- Pick 4 -->
            <div class="flex gap-6">
                <div class="w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden bg-gray-200">
                    <img src="/api/placeholder/100/100" alt="Article thumbnail" class="w-full h-full object-cover">
                </div>
                <div>
                    <span class="text-yellow-600 text-sm font-medium">Mindfulness</span>
                    <h3 class="font-bold text-lg mb-2 hover:text-indigo-600 transition">Mindful Eating: Transforming Your Relationship with Food</h3>
                    <p class="text-gray-600 text-sm mb-2">Practical techniques to bring awareness to your meals and develop healthier habits.</p>
                    <span class="text-xs text-gray-500">Jan 18 · 5 min read</span>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold">Mindful Wanderer</span>
                    </div>
                    <p class="text-gray-400 mb-4">Exploring the balance between mindfulness, productivity, and meaningful living in the modern world.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mindfulness</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Productivity</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Wellness</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Travel</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Technology</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Advertise</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Stay Updated</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest articles and updates.</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-indigo-400 focus:outline-none text-white">
                        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded font-medium hover:bg-indigo-700 transition">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; 2025 Mindful Wanderer. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
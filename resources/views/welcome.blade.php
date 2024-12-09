<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> shop </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-gray-800">ShopLogo</a>
        <div class="flex md:hidden">
            <button class="text-gray-800 focus:outline-none" id="menu-toggle">
                <svg class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="hidden md:flex items-center space-x-4" id="menu">
            <a href="#" class="text-gray-800 hover:text-blue-600">Home</a>
            <a href="#" class="text-gray-800 hover:text-blue-600">Shop</a>
            <a href="#" class="text-gray-800 hover:text-blue-600">About</a>
            <a href="#" class="text-gray-800 hover:text-blue-600">Contact</a>
        </div>
    </div>
</nav>


<!-- Slideshow -->
<div class="relative bg-gray-200">
    <div class="container mx-auto px-6 py-10 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Our Shop</h1>
        <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#products" class="bg-blue-600 text-white px-6 py-2 rounded-md">Shop Now</a>
    </div>
</div>


<!-- Brands -->
<div class="container mx-auto px-6 py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Brands</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white shadow-md rounded-lg p-4 text-center">Brand 1</div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center">Brand 2</div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center">Brand 3</div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center">Brand 4</div>
    </div>
</div>

<!-- Categories -->
<div class="container mx-auto px-6 py-10 bg-gray-50">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Categories</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-blue-100 shadow-md rounded-lg p-6 text-center">
            <p class="font-bold">Category 1</p>
        </div>
        <div class="bg-blue-100 shadow-md rounded-lg p-6 text-center">
            <p class="font-bold">Category 2</p>
        </div>
        <div class="bg-blue-100 shadow-md rounded-lg p-6 text-center">
            <p class="font-bold">Category 3</p>
        </div>
        <div class="bg-blue-100 shadow-md rounded-lg p-6 text-center">
            <p class="font-bold">Category 4</p>
        </div>
    </div>
</div>
<!-- Products -->
<div id="products" class="container mx-auto px-6 py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-300 h-40"></div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Product {{ $i }}</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="mt-4">
                        <span class="text-xl font-bold">$99.99</span>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md float-right">Buy</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>


<!-- Footer -->
<footer class="bg-gray-800 py-6">
    <div class="container mx-auto px-6 text-center text-white">
        <p>&copy; {{ date('Y') }} Shop. All rights reserved.</p>
    </div>
</footer>

<!-- Script for Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>

</html>

</body>

</html>



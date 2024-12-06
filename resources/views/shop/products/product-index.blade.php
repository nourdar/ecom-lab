@include('shop.layout.header')

@include('shop.layout.navbar')


<!-- Product Section -->
<div class="container mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
        <!-- Product Image -->
        <div class="w-full md:w-1/2">
            <img src="https://via.placeholder.com/500" alt="Product Image" class="w-full rounded-lg shadow">
        </div>

        <!-- Product Details -->
        <div class="w-full md:w-1/2">
            <h1 class="text-3xl font-bold text-gray-800 mb-4"> {{ $productName }}</h1>
            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            <p class="text-xl font-bold text-blue-600 mb-6">{{$productPrice}}</p>

            <!-- Form -->
            <form method="POST" action="#">
                <label for="quantity" class="block text-gray-800 font-medium mb-2">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1"
                       class="w-20 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 mb-4">

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md shadow hover:bg-blue-700">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>

@include('shop.layout.footer')

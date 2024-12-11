@include('shop.layout.header')
@include('shop.layout.navbar')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Our Brands</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($brands as $brand)
            <div class="p-6 border rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">{{ $brand['name'] }}</h2>
                <p class="text-gray-600">{{ $brand['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>

@include('shop.layout.footer')

@include('shop.layout.header', ['title' => 'Create Product'])
@include('shop.layout.navbar')
@include('shop.layout.search-area')
@include('shop.layout.breadcrumb-section',['description' => 'See more Details', 'name' => 'Create a New Product'])

    <div class="container mt-5">
        <h2>Create a New Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description" required></textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter product price" required>
            </div>

            <!-- Stock -->
            <div class="mb-3">
                <label for="stock" class="form-label">Stock Quantity</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter stock quantity" required>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id" required>
                    <option value="">Select a category</option>
                    @foreach ($categories as $item)
                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                    @endforeach
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="image_url" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
            <button  class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Create Product </button>
            {{-- <button type="submit" class="btn btn-primary">Create Product</button> --}}
            </div>
        </form>
    </div>
</body>

@include('shop.layout.footer')

@include('shop.layout.header')

@include('shop.layout.navbar')

<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Product Details Section -->
        <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="path/to/product-image.jpg" alt="Product Image" class="w-full h-64 object-cover rounded-lg mb-4">
            <h3 class="text-2xl font-bold text-gray-900 mb-2">اسم المنتج</h3>
            <p class="text-gray-700 mb-4">وصف المنتج</p>
            <div class="flex items-center mb-4">
                <span class="text-gray-900 font-semibold mr-2">اللون:</span>
                <span class="w-6 h-6 bg-red-500 rounded-full mr-2"></span>
                <span class="w-6 h-6 bg-green-500 rounded-full mr-2"></span>
                <span class="w-6 h-6 bg-blue-500 rounded-full"></span>
            </div>
            <p class="text-gray-700">السعر: <span class="font-semibold">5000 دج</span></p>
        </div>

        <!-- Order Form Section -->
        <div class="p-4 bg-gray-50 shadow-lg rounded-lg">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4h-6a2 2 0 010-4H5a2 2 0 100 4h1v8a2 2 0 002 2h6a2 2 0 002-2h1a2 2 0 100-4h-6"></path>
                </svg>
                اطلب الآن
            </h2>
            <form method="POST" action="">
                @csrf
                <!-- Full Name Input -->
                <div class="mb-3">
                    <label for="full_name" class="block text-gray-700 font-medium mb-1 flex items-center">
                        <i class="fas fa-user text-gray-600 mr-2"></i>
                        الاسم الكامل
                    </label>
                    <input type="text" id="full_name" name="full_name"
                        class="w-full px-3 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Phone Number Input -->
                <div class="mb-3">
                    <label for="phone" class="block text-gray-700 font-medium mb-1 flex items-center">
                        <i class="fas fa-phone-alt text-gray-600 mr-2"></i>
                        رقم الهاتف
                    </label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full px-3 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Province Selector -->
                <div class="mb-3">
                    <label for="province" class="block text-gray-700 font-medium mb-1 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-600 mr-2"></i>
                        اختر الولاية
                    </label>
                    <select id="province" name="province"
                        class="w-full px-3 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="">اختر...</option>
                        <option value="1">ولاية 1</option>
                        <option value="2">ولاية 2</option>
                        <!-- Add more options here -->
                    </select>
                </div>

                <!-- Municipality Selector -->
                <div class="mb-3">
                    <label for="municipality" class="block text-gray-700 font-medium mb-1 flex items-center">
                        <i class="fas fa-building text-gray-600 mr-2"></i>
                        اختر البلدية
                    </label>
                    <select id="municipality" name="municipality"
                        class="w-full px-3 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="">اختر...</option>
                        <option value="1">بلدية 1</option>
                        <option value="2">بلدية 2</option>
                        <!-- Add more options here -->
                    </select>
                </div>

                <!-- Order Summary Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-gray-800 mb-2 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 00-1-7.47 4 4 0 000 7.94A4 4 0 103 15z"></path>
                        </svg>
                        ملخص الطلب
                    </h3>

                    <div class="mb-4">
                        <button type="button" class="w-full bg-gray-200 text-gray-800 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="toggleOrderSummary">عرض/إخفاء تفاصيل الطلب</button>
                        <div id="orderSummaryDropdown" class="hidden mt-2">
                            <div class="flex justify-between items-center py-2 border-b">
                                <span>هاتف</span>
                                <span class="text-gray-600">5000 دج</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="font-semibold">المجموع</span>
                                <span class="font-semibold text-gray-800">3300 دج</span>
                            </div>
                            <div class="flex items-center mt-2">
                                <input type="number" name="quantity" min="1" value="1" class="w-20 px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <span class="ml-2 text-gray-700">تعديل الكمية</span>
                            </div>
                            <div class="mt-2">
                                <label for="delivery" class="block text-gray-700 font-medium mb-1 flex items-center">
                                    <i class="fas fa-truck text-gray-600 mr-2"></i>
                                    خيارات التوصيل
                                </label>
                                <select id="delivery" name="delivery"
                                    class="w-full px-3 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                                    <option value="office">التوصيل لمكتب شركة التوصيل: 800 دج</option>
                                    <option value="home">التوصيل للمنزل: 2500 دج</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 focus:outline-none">
                    اطلب الآن
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggleOrderSummary').addEventListener('click', function() {
        var dropdown = document.getElementById('orderSummaryDropdown');
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.add('hidden');
        }
    });
</script>

@include('shop.layout.footer')

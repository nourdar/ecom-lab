<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // إنشاء مستخدم اختباري
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin@admin.com',
        ]);

        // إنشاء مستخدمين إضافيين
        User::factory(10)->create();

        // إنشاء التصنيفات
        $categories = Category::factory(10)->create();

        // إنشاء العلامات التجارية
        $brands = Brand::factory(5)->create();

        // إنشاء الموردين
        $suppliers = Supplier::factory(10)->create();

        // إنشاء المنتجات وربطها بالعلاقات
        Product::factory(50)->create()->each(function ($product) use ($categories, $brands, $suppliers) {
            $product->category_id = $categories->random()->id;
            $product->brand_id = $brands->random()->id;
            $product->supplier_id = $suppliers->random()->id;
            $product->save();
        });

        // إنشاء العملاء
        Customer::factory(20)->create();
    }
}

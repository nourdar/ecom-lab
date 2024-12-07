<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity')->default(1)->min(1); // تأكيد الكمية المطلوبة
            $table->decimal('price', 10, 2); // تأكيد أن السعر ليس سالبًا
            $table->decimal('tax', 5, 2)->default(0); // تأكيد أن الضريبة يمكن أن تكون صفرًا
            $table->decimal('discount', 10, 2)->default(0); // إضافة عمود الخصم
            $table->decimal('total', 10, 2);  // الإجمالي بناءً على الكمية والسعر والضريبة
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};

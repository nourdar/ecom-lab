<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules()
    {
        return [
            'order_id' => 'required|exists:orders,id',         // التأكد من وجود order_id في جدول orders
            'product_id' => 'required|exists:products,id',     // التأكد من وجود product_id في جدول products
            'quantity' => 'required|integer|min:1',            // التأكد من أن الكمية أكبر من أو تساوي 1
            'price' => 'required|numeric|min:0',               // التأكد من أن السعر غير سالب
            'tax' => 'nullable|numeric|min:0|max:100',          // التأكد من أن الضريبة بين 0 و 100%
            'discount' => 'nullable|numeric|min:0',             // التأكد من أن الخصم غير سالب
            'total' => 'nullable|numeric|min:0',                // التأكد من أن الإجمالي غير سالب
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'يجب تحديد رقم الطلب.',
            'order_id.exists' => 'رقم الطلب غير موجود.',
            'product_id.required' => 'يجب تحديد المنتج.',
            'product_id.exists' => 'المنتج غير موجود.',
            'quantity.required' => 'يجب تحديد الكمية.',
            'quantity.integer' => 'يجب أن تكون الكمية عدد صحيح.',
            'quantity.min' => 'يجب أن تكون الكمية أكبر من أو تساوي 1.',
            'price.required' => 'يجب تحديد السعر.',
            'price.numeric' => 'السعر يجب أن يكون عددًا.',
            'price.min' => 'السعر يجب أن يكون أكبر من أو يساوي صفر.',
            'tax.numeric' => 'الضريبة يجب أن تكون عددًا.',
            'tax.min' => 'الضريبة يجب أن تكون أكبر من أو تساوي صفر.',
            'tax.max' => 'الضريبة لا يمكن أن تتجاوز 100%.',
            'discount.numeric' => 'الخصم يجب أن يكون عددًا.',
            'discount.min' => 'الخصم يجب أن يكون أكبر من أو يساوي صفر.',
            'total.numeric' => 'الإجمالي يجب أن يكون عددًا.',
            'total.min' => 'الإجمالي يجب أن يكون أكبر من أو يساوي صفر.',
        ];
    }
}

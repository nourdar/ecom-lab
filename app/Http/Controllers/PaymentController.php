<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
        public static function payment_methods(): array
        {
            return [
                'cash' => 'Cash on delivery',
                'credit_card' => 'Credit Card',
                'paypal' => 'Paypal',
                'bank_transfer' => 'Bank transfer'
            ];
        }
}

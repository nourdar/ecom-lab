<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        $marks = ['Premium', 'Standard', 'Budget'];
        return view('shop.category.marks', compact('marks'));
    }

    public function showMark($id)
    {
        $mark = Mark::findOrFail($id); // Example
        return view('shop.category.marks', ['markName' => $mark->name, 'markType' => $mark->type]);
    }
}

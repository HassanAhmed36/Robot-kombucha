<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getProducts()
    {
        return view('product', [
            'products' => Product::with('images')->get()
        ]);
    }

    public function getOneProduct($id)
    {
        return view('product-detail', [
            'product' => Product::with('images')->find($id)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        $products = Product::orderBy('nome')->get();
        return view('products.index', compact('products'));
    }

     function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}

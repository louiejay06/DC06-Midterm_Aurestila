<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index() {
        return Inertia::render('Products/Index', [
            'products' => Product::orderBy('brand')
                ->get()
                ->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'brand' => $product->brand,
                        'name' => $product->name,
                        'description' => $product->description,
                        'retail_price' => $product->retail_price,
                        'qty_stock' => $product->qty_stock,
                        'category' => $product->category->name,
                        'thumbnail' => $product->thumbnail,
                    ];
                })
        ]);
    }

    public function create()
    {
        return Inertia::render('Products/Create');
    }
}

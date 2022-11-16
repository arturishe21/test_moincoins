<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function show(Product $product): JsonResponse
    {
        return response()->json($product->load('categories'));
    }
}

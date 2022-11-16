<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductsCollection;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::cursorPaginate(15);

        return response()->json(new ProductsCollection($products));
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json(new ProductResource($product));
    }
}

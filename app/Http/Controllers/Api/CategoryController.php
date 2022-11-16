<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
   public function show(Category $category): JsonResponse
   {
       return response()->json($category->load('products'));
   }
}

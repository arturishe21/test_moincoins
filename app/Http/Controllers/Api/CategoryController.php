<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
   public function index(): JsonResponse
   {
       $categories = Category::cursorPaginate(15);

       return response()->json(new CategoriesCollection($categories));
   }

   public function show(Category $category): JsonResponse
   {
       return response()->json(new CategoryResource($category->load('products')));
   }
}

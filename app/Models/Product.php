<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $guarded = [];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'product_category',
            'product_id',
            'category_id'
        );
    }

    public function relatedProducts(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'related_products',
            'product_id',
            'related_product_id'
        );
    }
}
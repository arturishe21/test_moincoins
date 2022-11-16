<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_category',
            'product_id',
            'category_id'
        );
    }
}
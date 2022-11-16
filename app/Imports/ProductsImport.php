<?php
namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProductsImport implements ToModel, WithProgressBar, WithHeadingRow, WithChunkReading
{
    use Importable;

    public function model(array $row)
    {
        $product = Product::create(Arr::except($row, ['categories', 'related_products']));

        $this->createRelationForCategories($product, $row['categories']);
        $this->createRelationForRelatedProducts($product, $row['related_products']);
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    private function createRelationForCategories(Product $product, string $categories): void
    {
        $categories = Category::whereIn('id', explode(',', $categories))->get();

        $product->categories()->sync($categories);
    }

    private function createRelationForRelatedProducts(Product $product, ?string $relatedProducts): void
    {
        if ($relatedProducts) {
            $products = Product::whereIn('id', explode(',', $relatedProducts))->get();
            $product->relatedProducts()->sync($products);
        }
    }
}
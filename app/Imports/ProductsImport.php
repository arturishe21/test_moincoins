<?php
namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithProgressBar, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        $product = Product::create([
            'id' => $row['id'],
            'type_id' => $row['type_id'],
            'sku' => $row['sku'],
            'opera_sku' => $row['opera_sku'],
            'old_sku' => $row['old_sku'],
            'override_opera' => $row['override_opera'],
            'name' => $row['name'],
            'inlet' => $row['inlet'],
            'outlet' => $row['outlet'],
            'angle_in_deg' => $row['angle_in_deg'],
            'max_lpm' => $row['max_lpm'],
            'voltage' => $row['voltage'],
            'material' => $row['material'],
            'bar' => $row['bar'],
            'diameter' => $row['diameter'],
            'colour' => $row['colour'],
            'rpm' => $row['rpm'],
            'status' => $row['status'],
            'url_key' => $row['url_key'],
            'visibility' => $row['visibility'],
            'clearance' => $row['clearance'],
            'max_temperature' => $row['max_temperature'],
            'description' => $row['description'],
            'short_description' => $row['short_description'],
            'tech_spec_1' => $row['tech_spec_1'],
            'tech_spec_2' => $row['tech_spec_2'],
            'product_videos' => $row['product_videos'],
            'nozzle_value' => $row['nozzle_value'],
            'nozzle_size' => $row['nozzle_size'],
            'foam_value' => $row['foam_value'],
            'is_featured' => $row['is_featured'],
            'featured_position' => trim($row['featured_position']) ?: 0,
            'hose_clamp_size' => $row['hose_clamp_size'],
            'orifice_size' => $row['orifice_size'],
            'shoe_size' => $row['shoe_size'],
            'thread' => $row['thread'],
            'size_and_angle' => $row['size_and_angle'],
            'inlet_outlet' => $row['inlet_outlet'],
            'clothing_size' => $row['clothing_size'],
            'wheel_style' => $row['wheel_style'],
            'flow_and_pressure' => $row['flow_and_pressure'],
            'country_of_manufacture' => $row['country_of_manufacture'],
            'select_nozzle_size' => $row['select_nozzle_size'],
            'dn_internal_diameter' => $row['dn_internal_diameter'],
            'currency' => $row['currency'],
            'pack_size' => $row['pack_size'],
            'easyturn' => $row['easyturn'],
            'priority' => $row['priority'],
            'hose_application' => $row['hose_application'],
            'hose_inlet' => $row['hose_inlet'],
            'hose_outlet' => $row['hose_outlet'],
            'hose_length' => $row['hose_length'],
            'hose_colour' => $row['hose_colour'],
            'price' => $row['price'],
            'special_price' => $row['special_price'],
            'poa' => $row['poa'],
            'poa_price' => $row['poa_price'],
            'msrp' => $row['msrp'],
            'meta_title' => $row['meta_title'],
            'meta_keywords' => $row['meta_keywords'],
            'meta_description' => $row['meta_description'],
            'pdf_title_1' => $row['pdf_title_1'],
            'pdf_title_2' => $row['pdf_title_2'],
            'pdf_title_3' => $row['pdf_title_3'],
            'pdf_title_4' => $row['pdf_title_4'],
            'bullet_point_1' => $row['bullet_point_1'],
            'bullet_point_2' => $row['bullet_point_2'],
            'bullet_point_3' => $row['bullet_point_3'],
            'bullet_point_4' => $row['bullet_point_4'],
            'maintenance_video_title_1' => $row['maintenance_video_title_1'],
            'maintenance_video_url_1' => $row['maintenance_video_url_1'],
            'maintenance_video_title_2' => $row['maintenance_video_title_2'],
            'maintenance_video_url_2' => $row['maintenance_video_url_2'],
            'maintenance_video_title_3' => $row['maintenance_video_title_3'],
            'maintenance_video_url_3' => $row['maintenance_video_url_3'],
            'maintenance_video_title_4' => $row['maintenance_video_title_4'],
            'maintenance_video_url_4' => $row['maintenance_video_url_4'],
            'stock_status' => $row['stock_status'],
            'configurable_product_parent_id' => $row['configurable_product_parent_id']
        ]);

        $this->createRelationForCategories($product, $row['categories']);
        $this->createRelationForRelatedProducts($product, $row['related_products']);
    }

    public function headingRow(): int
    {
        return 1;
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
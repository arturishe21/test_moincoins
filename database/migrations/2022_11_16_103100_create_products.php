<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type_id', 10);
            $table->string('sku', 20);
            $table->string('opera_sku', 20)->nullable();
            $table->string('old_sku', 20)->nullable();
            $table->integer('override_opera');
            $table->string('name');
            $table->string('inlet', 10)->nullable();
            $table->string('outlet', 10)->nullable();
            $table->string('angle_in_deg', 10)->nullable();
            $table->string('max_lpm', 10)->nullable();
            $table->string('voltage', 10)->nullable();
            $table->integer('material')->nullable();
            $table->integer('bar')->nullable();
            $table->string('o-ring_thickness', 100)->nullable();
            $table->integer('diameter')->nullable();
            $table->integer('colour')->nullable();
            $table->integer('rpm')->nullable();
            $table->tinyInteger('status');
            $table->string('hose_type')->nullable();
            $table->string('o_ring_thickness')->nullable();
            $table->string('url_key')->nullable();
            $table->integer('visibility')->nullable();
            $table->integer('clearance')->nullable();
            $table->integer('max_temperature')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('tech_spec_1')->nullable();
            $table->text('tech_spec_2')->nullable();
            $table->text('tech_spec_3')->nullable();
            $table->text('product_videos')->nullable();
            $table->string('nozzle_value')->nullable();
            $table->string('nozzle_size')->nullable();
            $table->string('foam_value')->nullable();
            $table->tinyInteger('is_featured')->nullable();
            $table->string('featured_position', 10)->nullable();
            $table->string('hose_clamp_size')->nullable();
            $table->string('orifice_size')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('thread')->nullable();
            $table->string('size_and_angle')->nullable();
            $table->string('inlet_outlet')->nullable();
            $table->string('clothing_size')->nullable();
            $table->string('wheel_style')->nullable();
            $table->string('flow_and_pressure')->nullable();
            $table->string('country_of_manufacture')->nullable();
            $table->string('select_nozzle_size')->nullable();
            $table->string('dn_internal_diameter', 10)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('pack_size', 10)->nullable();
            $table->string('easyturn')->nullable();
            $table->integer('priority')->nullable();
            $table->string('manufacturer_number_1', 100)->nullable();
            $table->string('manufacturer_number_2', 100)->nullable();
            $table->string('manufacturer_number_3', 100)->nullable();
            $table->string('manufacturer_number_4', 100)->nullable();
            $table->string('manufacturer_number_5', 100)->nullable();
            $table->string('manufacturer_number_6', 100)->nullable();
            $table->string('manufacturer_number_7', 100)->nullable();
            $table->string('manufacturer_number_8', 100)->nullable();
            $table->string('manufacturer_number_9', 100)->nullable();
            $table->string('manufacturer_number_10', 100)->nullable();
            $table->string('hose_application')->nullable();
            $table->string('hose_inlet', 20)->nullable();
            $table->string('hose_outlet', 20)->nullable();
            $table->string('hose_length', 20)->nullable();
            $table->string('hose_colour', 20)->nullable();
            $table->string('price')->nullable();
            $table->string('special_price')->nullable();
            $table->integer('poa');
            $table->integer('poa_price')->nullable();
            $table->string('msrp')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('pdf_title_1')->nullable();
            $table->string('pdf_title_2')->nullable();
            $table->string('pdf_title_3')->nullable();
            $table->string('pdf_title_4')->nullable();
            $table->string('bullet_point_1', 100)->nullable();
            $table->string('bullet_point_2', 100)->nullable();
            $table->string('bullet_point_3', 100)->nullable();
            $table->string('bullet_point_4', 100)->nullable();
            $table->string('maintenance_videos')->nullable();
            $table->string('maintenance_video_title_1', 100)->nullable();
            $table->string('maintenance_video_url_1')->nullable();
            $table->string('maintenance_video_title_2', 100)->nullable();
            $table->string('maintenance_video_url_2')->nullable();
            $table->string('maintenance_video_title_3', 100)->nullable();
            $table->string('maintenance_video_url_3')->nullable();
            $table->string('maintenance_video_title_4', 100)->nullable();
            $table->string('maintenance_video_url_4')->nullable();
            $table->integer('stock_status')->nullable();
            $table->integer('configurable_product_parent_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

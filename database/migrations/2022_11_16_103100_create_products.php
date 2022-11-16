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
            $table->string('type_id');
            $table->string('sku');
            $table->string('opera_sku')->nullable();
            $table->string('old_sku')->nullable();
            $table->integer('override_opera');
            $table->string('name');
            $table->string('inlet')->nullable();
            $table->string('outlet')->nullable();
            $table->string('angle_in_deg')->nullable();
            $table->string('max_lpm')->nullable();
            $table->string('voltage')->nullable();
            $table->integer('material')->nullable();
            $table->integer('bar')->nullable();
            $table->string('o-ring_thickness')->nullable();
            $table->integer('diameter')->nullable();
            $table->integer('colour')->nullable();
            $table->integer('rpm')->nullable();
            $table->tinyInteger('status');
            $table->string('url_key')->nullable();
            $table->integer('visibility')->nullable();
            $table->integer('clearance')->nullable();
            $table->integer('max_temperature')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('tech_spec_1')->nullable();
            $table->text('tech_spec_2')->nullable();
            $table->text('product_videos')->nullable();
            $table->string('nozzle_value')->nullable();
            $table->string('nozzle_size')->nullable();
            $table->string('foam_value')->nullable();
            $table->tinyInteger('is_featured')->nullable();
            $table->integer('featured_position')->nullable();
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
            $table->string('dn_internal_diameter')->nullable();
            $table->string('currency')->nullable();
            $table->string('pack_size')->nullable();
            $table->string('easyturn')->nullable();
            $table->integer('priority');
            $table->string('hose_application')->nullable();
            $table->string('hose_inlet')->nullable();
            $table->string('hose_outlet')->nullable();
            $table->string('hose_length')->nullable();
            $table->string('hose_colour')->nullable();
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
            $table->string('bullet_point_1')->nullable();
            $table->string('bullet_point_2')->nullable();
            $table->string('bullet_point_3')->nullable();
            $table->string('bullet_point_4')->nullable();
            $table->string('maintenance_video_title_1')->nullable();
            $table->string('maintenance_video_url_1')->nullable();
            $table->string('maintenance_video_title_2')->nullable();
            $table->string('maintenance_video_url_2')->nullable();
            $table->string('maintenance_video_title_3')->nullable();
            $table->string('maintenance_video_url_3')->nullable();
            $table->string('maintenance_video_title_4')->nullable();
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

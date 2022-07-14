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
            $table->string('product_name');
            $table->string('image');
            $table->integer('price');
            $table->boolean('publish_status');
            $table->integer('category_id');
            $table->integer('discount_price');
            $table->integer('waiting_time');
            $table->integer('ram');
            $table->integer('battery');
            $table->integer('internal_storage');
            $table->integer('front_camera');
            $table->integer('back_camera');
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

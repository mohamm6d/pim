<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title')->unique();
            $table->string('sku')->unique();
            $table->integer('category_id');
            $table->string('supplier');
            $table->string('type');
            $table->string('net_price');
            $table->string('sale_price');
            $table->integer('creator_id');
            $table->string('vat');
            $table->string('unit');
            $table->boolean('status')->default(1);
            $table->text('description');
            $table->string('ean')->nullable();
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
}

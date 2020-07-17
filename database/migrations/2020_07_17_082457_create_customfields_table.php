<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customfields', function (Blueprint $table) {
            $table->id();
            $table->integer('element_id');
            $table->string('element_type');
            $table->string('language')->nullable();
            $table->string('group')->nullable();
            $table->string('key');
            $table->text('value');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('customfields');
    }
}

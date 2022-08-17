<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("cate_id");
            $table->string("name");
            $table->string("description");
            $table->string("orginal_price");
            $table->string("selling_price");
            $table->string("image");
            $table->string("quantity");
            $table->string("tax");
            $table->tinyInteger("status");
            $table->tinyInteger("trending");
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
        Schema::dropIfExists('product');
    }
}

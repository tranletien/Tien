<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tlt_product', function (Blueprint $table) {
            $table->id(); //id
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->string('name', 1000);
            $table->string('slug', 1000);
            $table->float('price');
            $table->string('image', 1000);
            $table->unsignedInteger('qty');
            $table->float('pricesale')->nullable();
            $table->string('description')->nullable();
            $table->mediumtext('detail')->nullable();
            $table->timestamps(); //created_at, updated_at
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tlt_product');
    }
};

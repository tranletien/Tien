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
        Schema::create('tlt_topic', function (Blueprint $table) {
            $table->id();
            $table->string('name',1000);
            $table->string('slug',1000);
            // $table->unsignedInteger('parent_id');
            // $table->unsignedInteger('sort_order')->ult(0);
            // $table->string('metakey');
            // $table->string('metadesc');
            $table->string('description',255)->nullable();
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
        Schema::dropIfExists('tlt_topic');
    }
};

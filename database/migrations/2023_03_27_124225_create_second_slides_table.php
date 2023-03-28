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
        Schema::create('second_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('image');
            $table->string('name');
            $table->timestamps();

            $table->unsignedBigInteger('slide_id')->nullable();

            $table->index('slide_id','dropdown_slide_idx');

            $table->foreign('slide_id','dropdown_slide_fk')->on('slides')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('second_slides');
    }
};

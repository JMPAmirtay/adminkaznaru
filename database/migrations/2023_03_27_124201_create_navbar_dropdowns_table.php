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
        Schema::create('navbar_dropdowns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->timestamps();

            $table->unsignedBigInteger('navbar_id')->nullable();

            $table->index('navbar_id','dropdown_navbar_idx');

            $table->foreign('navbar_id','dropdown_navbar_fk')->on('navbars')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_dropdowns');
    }
};

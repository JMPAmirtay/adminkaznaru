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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('news_id','news_tag_post_idx');
            $table->index('tag_id','news_tag_tag_idx');

            $table->foreign('news_id','news_tag_post_fk')->on('news')->references('id');
            $table->foreign('tag_id','news_tag_tag_fk')->on('tags')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};

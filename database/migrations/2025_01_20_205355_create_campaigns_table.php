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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('platform_id');
            $table->string('image');
            $table->string('content_type');
            $table->string('content_placement');
            $table->text('description');
            $table->text('tags');
            $table->text('hash_tags');
            $table->string('category');
            $table->integer('no_of_influencer');
            $table->string('range');
            $table->string('budget');
            $table->integer('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};

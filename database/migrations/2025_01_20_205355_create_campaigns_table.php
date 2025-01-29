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
            $table->integer('platform_id');
            $table->integer('user_id');
            $table->string('category');
            $table->string('country');
            $table->integer('no_of_influencer');
            $table->string('range');
            $table->string('language');
            $table->string('gender');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'pending', 'block'])->default('pending');
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

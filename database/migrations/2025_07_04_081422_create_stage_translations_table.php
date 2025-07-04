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
        Schema::create('stage_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stage_id');
            $table->string('locale')->index();
            $table->string('name'); // بدون unique هنا
            $table->string('desc')->nullable();
            $table->unique(['stage_id', 'locale']);
            $table->foreign('stage_id')->references('id')->on('stages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_translations');
    }
};

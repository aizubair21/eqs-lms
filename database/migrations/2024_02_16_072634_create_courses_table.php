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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigInteger("id")->autoIncrement();
            $table->string('name');
            $table->string('thumb')->nullable();
            $table->integer('has_batch')->nullable(); //0 1
            $table->bigInteger('category');
            $table->text('description')->nullable();
            $table->string('feature', 500)->nullable();
            $table->string('target', 500)->nullable();
            $table->string('outcome', 500)->nullable();
            $table->bigInteger('instructor');
            $table->string('type'); //free of paid
            $table->string('slug'); //slug for seo
            $table->string('price')->default("100");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

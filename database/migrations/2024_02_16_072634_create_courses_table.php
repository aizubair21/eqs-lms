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
            $table->string('title', '300')->nullable()->default("untitled");
            $table->string('slug', '300')->nullable(); //slug for seo
            $table->string('info', '1000')->nullable(); //slug for seo
            $table->text('description', '5000')->nullable();

            $table->boolean("has_batch", '5')->nullable()->default(false);
            $table->boolean("has_certificate")->default(false);
            $table->string("certificate_type", "25")->nullable();

            $table->boolean("is_approve_cupon")->nullable()->default(false);
            $table->string("cupon_start_at", "25")->nullable();
            $table->string("cupon_end_at", "25")->nullable();

            $table->string('price', "5")->default(); //350
            $table->string('regular_price', "5")->default()->default("0"); //450
            $table->string('price_type', "10")->default()->default("paid"); //free or paid
            $table->string("has_discount")->nullable();
            $table->string("discount_end_at", "25")->nullable();

            $table->string('category')->nullable();
            $table->string('feature', '500')->nullable();
            $table->string('target', '500')->nullable();
            $table->string('outcome', '500')->nullable();

            $table->bigInteger('instructor')->nullable();
            $table->string("class_type", "50")->nullable()->default("free recorded class");
            $table->string("class_schedule", "500")->nullable(); //applicable with class type

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_thumbnail')->nullable();

            $table->string('thumbnail_type')->nullable();
            $table->string('thumbnail')->nullable();

            $table->string('status')->nullable()->default("draft"); //
            $table->string("course_uid", "255")->nullable();

            $table->boolean("can_anyone_enroll")->nullable()->default(true);
            $table->string("payment_type", "25")->nullable()->default("custom");
            $table->string("payment_details", "500")->nullable();

            $table->string("on_editing_stage", '25')->nullable()->default("home");
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

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
        Schema::create('module_contents', function (Blueprint $table) {
            $table->bigIncrements("id")->autoIncrement();
            $table->string("title")->nullable();
            $table->string("type")->nullable(true); // youtube, local, Gdrive
            $table->longText("description")->nullable(true); //content description
            $table->string("content")->nullable(); //video id or file link,
            $table->unsignedBigInteger("module_id");
            $table->bigInteger("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_contents');
    }
};

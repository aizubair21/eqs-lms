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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("username")->nullable();
            $table->string("display_name")->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->integer("status")->default(1);
            $table->string("profile_photo_path")->nullable();
            $table->string("profile_photo_url")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("temp_access_token")->nullable();
            $table->timestamp("is_verified_user")->nullable();
            $table->text("remember_me")->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('companycategory_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('status')->default(false);
            $table->string('logo')->nullable();
            $table->string('location');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('social_facebook')->unique()->nullable();
            $table->string('social_instagram')->unique()->nullable();
            $table->string('social_youtube')->unique()->nullable();
            $table->string('social_twitter')->unique()->nullable();
            $table->string('website')->unique()->nullable();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};

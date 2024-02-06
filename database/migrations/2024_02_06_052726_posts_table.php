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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_posts');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_user');
            $table->string('title');
            $table->text('content');
            $table->timestamp('last_update')->useCurrent();
            $table->timestamps();


            $table->foreign('id_category')->references('id_category')->on('categories');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

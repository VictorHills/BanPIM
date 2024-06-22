<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('tag_id');
            $table->string('size');
            $table->string('weight');
            $table->integer('views')->nullable();
            $table->integer('downloads')->nullable();
            $table->string('sku_id')->unique();
            $table->string('color');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
};

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
        Schema::create('libs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('description')->nullable();
            $table->integer('page_count');
            $table->string('author_name',50);
            $table->string('author_email',50);
            $table->date('published_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libs');
    }
};

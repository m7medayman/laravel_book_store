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
        Schema::create('books', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table-> unsignedInteger('price');
            $table->string('title');
            $table->string('auhtor');
            $table->string('isbn')-> primary();
            $table->unsignedInteger('stock');
        });
    }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('books');
    // }
};

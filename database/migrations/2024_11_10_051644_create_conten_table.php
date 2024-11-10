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
        Schema::create('conten', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("desription")->nullable();
            $table->string("thumbnail")->nullable();
            $table->tinyInteger("view")->default(0);
            $table->integer("category_id");
            $table->integer("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conten');
    }
};

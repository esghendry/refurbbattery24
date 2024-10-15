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
        Schema::create('storage_objects', function (Blueprint $table) {
            $table->id();

            $table->morphs('model');

            $table->text('path');
            $table->text('file_name');
            $table->string('disk');

            $table->unsignedBigInteger('size')->nullable();
            $table->string('type')->nullable();

            $table->string('hash')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage_objects');
    }
};

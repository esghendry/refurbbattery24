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
        Schema::create('sectionables', function (Blueprint $table) {

            $table->integer('section_id');
            $table->morphs('sectionable');
            $table->integer('order')->default(0);

            $table->timestamps();

            $table->primary(['section_id', 'sectionable_id', 'sectionable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectionables');
    }
};

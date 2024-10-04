<?php

use App\Models\Location;
use App\Models\User;
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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Location::class);

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('subtitle', 512)->nullable();
            $table->string('info_heading')->nullable();

            $table->text('quote')->nullable();
            $table->json('blocks')->nullable();

            $table->string('status')->default('draft');
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });

        App\Models\Category::create(['category' => 'animals']);
        App\Models\Category::create(['category' => 'celebrities']);
        App\Models\Category::create(['category' => 'countries']);
        App\Models\Category::create(['category' => 'snacks']);
        App\Models\Category::create(['category' => 'bilingual']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
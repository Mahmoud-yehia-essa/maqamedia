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
        Schema::create('site_colors', function (Blueprint $table) {
            $table->id();

                        $table->text('primary_color')->nullable();
                        $table->text('secondary_color')->nullable();
                        $table->text('font_color')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_colors');
    }
};

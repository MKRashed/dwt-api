<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->unique('title');
        });
    }

    public function down(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropUnique(['title']);
        });
    }
};

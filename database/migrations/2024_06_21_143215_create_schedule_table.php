<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string("day", 100)->default("null");
            $table->string("dd", 100)->default("null");
            $table->string("mm", 100)->default("null");
            $table->string("yyyy", 100)->default("null");
            $table->timestamps();
        });
    }
};

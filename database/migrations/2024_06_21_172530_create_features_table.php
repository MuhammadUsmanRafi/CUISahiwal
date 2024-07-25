<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string("icon", 100)->default("null");
            $table->string("title", 100)->default("null");
            $table->string("description", 100)->default("null");
            $table->timestamps();
        });
    }
};

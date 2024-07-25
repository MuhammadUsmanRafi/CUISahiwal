<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('factcounter', function (Blueprint $table) {
            $table->id();
            $table->string("icon", 100)->default("null");
            $table->string("count", 100)->default("null");
            $table->string("basetitle", 100)->default("null");
            $table->timestamps();
        });
    }
};

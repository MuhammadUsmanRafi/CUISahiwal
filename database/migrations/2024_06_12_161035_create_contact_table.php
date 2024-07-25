<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('username')->default('null');
            $table->string('email')->default('null');
            $table->string('phone')->default('null');
            $table->string('subject')->default('null');
            $table->string('message',2000)->default('null');
            $table->string('ip')->default('null');
            $table->timestamps();
        });

        
    }
};

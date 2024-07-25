<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('starttime')->default("null");
            $table->string('endtime')->default("null");
            $table->string('imageurl')->default("null");
            $table->string('speaker')->default("null");
            $table->string('designation')->default("null");
            $table->string('title')->default("null");
            $table->text('description')->default("null");
            $table->foreignId('schedule_id')->constrained('schedule')->onDelete('cascade');
            $table->timestamps();
        });
    }

};

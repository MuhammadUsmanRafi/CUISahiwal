<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('userregister', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id')->default(0);
            $table->unsignedBigInteger('session_id')->nullable();
            $table->string('username')->default("null");
            $table->string('email')->default("null");
            $table->string('phone')->default("null");
            $table->text('message')->default("null");
            $table->string('ipaddress')->default("0.0.0.1");
            $table->string('venue')->default('COMSATS Sahiwal');
            $table->string('time')->default('null');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('comingsoonevents')->onDelete('cascade');
            $table->timestamps();
        });

    }

};

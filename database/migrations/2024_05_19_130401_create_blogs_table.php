<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->default('null');
            $table->string('uploadedby', 500)->default('Admin');
            $table->integer('totalcomment')->default(0);
            $table->string('imageurl', 500)->default('null');
            $table->string('shortdescription', 700)->default('null');
            $table->string('longdescription', 5000)->default('null');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

};

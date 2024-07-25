<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('sname', 100)->default('null');
            $table->string('designation', 200)->default('null');
            $table->string('imageurl', 500)->default('null');
            $table->string('furl', 500)->default('null');
            $table->string('turl', 500)->default('null');
            $table->string('purl', 500)->default('null');
            $table->string('durl', 500)->default('null');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }
};

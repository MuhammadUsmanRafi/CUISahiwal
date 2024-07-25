<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comingsoonevents', function (Blueprint $table) {
            $table->id();
            $table->string("eventdate")->default("null");
            $table->string("title")->default("null");
            $table->string("subtitle")->default("null");
            $table->string('imageurl')->default('null');
            $table->string("location")->default("null");
            $table->integer("seats")->default(0);
            $table->integer("speakers")->default(0);
            $table->timestamps();
        });
    }
};

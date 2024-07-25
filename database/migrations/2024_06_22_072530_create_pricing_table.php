<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTable extends Migration
{
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("null");
            $table->decimal('price', 10, 2)->default(0.00);
            $table->json('features')->default("null");
            $table->string('icon_class')->nullable();
            $table->timestamps();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogcomments', function (Blueprint $table) {
            $table->id();
            $table->string("commentatorname")->default("null");
            $table->date('date')->default(DB::raw('CURRENT_DATE'));
            $table->string("cmessage")->default("null");
            $table->string("imageurl")->default("frontend/images/resource/thumb-1.jpg");
            $table->foreignId('blog_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
};

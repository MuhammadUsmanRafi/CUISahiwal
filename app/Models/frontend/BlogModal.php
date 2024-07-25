<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModal extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $primary_key = "id";

    public function blog()
    {
        return $this->belongsTo(BlogModal::class, 'blog_id', 'id');
    }
}

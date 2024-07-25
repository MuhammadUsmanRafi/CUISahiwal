<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentModal extends Model
{
    use HasFactory;
    protected $table = "blogcomments";
    protected $primary_key = "id";

    public function comments()
    {
        return $this->hasMany(BlogCommentModal::class, 'blog_id', 'id');
    }
}

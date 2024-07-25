<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQsModal extends Model
{
    use HasFactory;
    protected $table = "faqs";
    protected $primary_key = "id";
}

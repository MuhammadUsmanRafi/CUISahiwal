<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModal extends Model
{
    use HasFactory;

    protected $table = "contact";
    protected $primary_key = 'id';
}

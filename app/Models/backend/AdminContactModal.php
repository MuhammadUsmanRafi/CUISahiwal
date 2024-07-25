<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContactModal extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $primarykey = 'id';
}

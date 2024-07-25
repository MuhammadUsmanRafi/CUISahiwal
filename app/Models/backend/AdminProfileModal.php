<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfileModal extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primarykey = 'id';
}

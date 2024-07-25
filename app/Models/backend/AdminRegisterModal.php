<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRegisterModal extends Model
{
    use HasFactory;
    protected $table = 'userregister';
    protected $primarykey = 'id';
}

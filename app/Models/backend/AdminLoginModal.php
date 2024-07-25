<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLoginModal extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $primary_key = 'id';
}

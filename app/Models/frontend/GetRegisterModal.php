<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetRegisterModal extends Model
{
    use HasFactory;

    protected $table = "userregister";
    protected $primary_key = "id";
}


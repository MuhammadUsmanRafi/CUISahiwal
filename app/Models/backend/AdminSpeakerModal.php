<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSpeakerModal extends Model
{
    use HasFactory;
    protected $table = 'speakers';
    protected $id = 'id';
}

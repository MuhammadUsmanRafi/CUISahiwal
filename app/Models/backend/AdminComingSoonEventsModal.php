<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminComingSoonEventsModal extends Model
{
    use HasFactory;
    protected $table = 'comingsoonevents';
    protected $primarykey = 'id';
}

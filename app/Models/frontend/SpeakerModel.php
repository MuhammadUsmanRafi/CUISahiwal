<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakerModel extends Model
{
    use HasFactory;

    protected $table = 'speakers';

    protected $primary_key = 'id';
}
